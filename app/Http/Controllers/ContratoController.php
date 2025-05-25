<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Contrato;
use App\Models\editor;
use App\Models\Locacao;
use App\Models\Veiculo;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ContratoController extends Controller
{
    public function gerar($id)
    {
                
        $locacao = Locacao::find($id);
        $contrato = Contrato::find($locacao->contrato_id);
        
       

        // DADOS DO CLIENTE
        $clienteNome = $locacao->cliente->nome;
        $clienteEndereco = $locacao->cliente->endereco;
        $clienteCidade = $locacao->Cliente->Cidade->nome;
        $clienteUf = $locacao->cliente->Estado->nome;

        //FORMATAR CPF
        $CPF_LENGTH = 11;
        $cnpj_cpf = preg_replace("/\D/", '', $locacao->Cliente->cpf_cnpj);

        if (strlen($cnpj_cpf) === $CPF_LENGTH) {
            $cpfCnpj = preg_replace("/(\d{3})(\d{3})(\d{3})(\d{2})/", "\$1.\$2.\$3-\$4", $cnpj_cpf);
        } else {
            $cpfCnpj =  preg_replace("/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/", "\$1.\$2.\$3/\$4-\$5", $cnpj_cpf);
        }

        $clienteRg = $locacao->cliente->rg;
        $clienteExpRg = $locacao->Cliente->exp_rg;
        $clienteTelefone1 = $locacao->Cliente->telefone_1;
        $clienteTelefone2 = $locacao->Cliente->telefone_2;
        $clienteEmail = $locacao->cliente->email;
        $clienteCNH = $locacao->Cliente->cnh;
        $clienteValidadeCNH = Carbon::parse($locacao->Cliente->validade_cnh)->format('d/m/Y');

        // DATA ATUAL
        $dataAtual = Carbon::now();

        // DADOS DO VEÍCULO
        $veiculoModelo = $locacao->veiculo->nome;
        $veiculoMarca = $locacao->veiculo->marca;
        $veiculoAno = $locacao->veiculo->ano;
        $veiculoPlaca = $locacao->veiculo->placa;
        $veiculoChassi = $locacao->veiculo->chassi;
        $veiculoRenavam = $locacao->veiculo->renavam;
        $veiculoCor = $locacao->veiculo->cor;

        //DADOS DA LOCAÇÃO
        $dataSaida = Carbon::parse($locacao->data_saida)->format('d/m/Y');
        $dataRetorno = Carbon::parse($locacao->data_retorno)->format('d/m/Y');
        $horaSaida = Carbon::parse($locacao->hora_saida)->format('H:i');
        $horaRetorno = Carbon::parse($locacao->hora_retorno)->format('H:i');
        $kmSaida = $locacao->km_saida;
        $qtdDiarias = $locacao->qtd_diarias;
        $valorDiaria = $locacao->Veiculo->valor_diaria;
        $valorDesconto = $locacao->valor_desconto;
        $valorTotalDesconto = $locacao->valor_total_desconto;
        $obs = $locacao->obs;

        // Substituir as variáveis dinâmicas no texto do contrato

        $textoContrato = $contrato->texto;
        //CLIENTE
        $textoContrato = str_replace('{{cliente-&gt;nome}}', $clienteNome, $textoContrato);
        $textoContrato = str_replace('{{cliente-&gt;endereco}}', $clienteEndereco, $textoContrato);
        $textoContrato = str_replace('{{cliente-&gt;cidade}}', $clienteCidade, $textoContrato);
        $textoContrato = str_replace('{{cliente-&gt;uf}}', $clienteUf, $textoContrato);
        $textoContrato = str_replace('{{cliente-&gt;cpfCnpj}}', $cpfCnpj, $textoContrato);
        $textoContrato = str_replace('{{cliente-&gt;rg}}', $clienteRg, $textoContrato);
        $textoContrato = str_replace('{{cliente-&gt;expRg}}', $clienteExpRg, $textoContrato);
        $textoContrato = str_replace('{{cliente-&gt;telefone1}}', $clienteTelefone1, $textoContrato);
        $textoContrato = str_replace('{{cliente-&gt;telefone2}}', $clienteTelefone2, $textoContrato);
        $textoContrato = str_replace('{{cliente-&gt;email}}', $clienteEmail, $textoContrato);
        $textoContrato = str_replace('{{cliente-&gt;cnh}}', $clienteCNH, $textoContrato);
        $textoContrato = str_replace('{{cliente-&gt;validadeCNH}}', $clienteValidadeCNH, $textoContrato);
        //VEICULO
        $textoContrato = str_replace('{{veiculo-&gt;modelo}}', $veiculoModelo, $textoContrato);
        $textoContrato = str_replace('{{veiculo-&gt;marca}}', $veiculoMarca, $textoContrato);
        $textoContrato = str_replace('{{veiculo-&gt;ano}}', $veiculoAno, $textoContrato);
        $textoContrato = str_replace('{{veiculo-&gt;placa}}', $veiculoPlaca, $textoContrato);
        $textoContrato = str_replace('{{veiculo-&gt;chassi}}', $veiculoChassi, $textoContrato);
        $textoContrato = str_replace('{{veiculo-&gt;renavam}}', $veiculoRenavam, $textoContrato);
        $textoContrato = str_replace('{{veiculo-&gt;cor}}', $veiculoCor, $textoContrato);
        //LOCAÇÃO
        $textoContrato = str_replace('{{locacao-&gt;dataAtual}}', $dataAtual, $textoContrato);
        $textoContrato = str_replace('{{locacao-&gt;dataSaida}}', $dataSaida, $textoContrato);
        $textoContrato = str_replace('{{locacao-&gt;dataRetorno}}', $dataRetorno, $textoContrato);
        $textoContrato = str_replace('{{locacao-&gt;horaSaida}}', $horaSaida, $textoContrato);
        $textoContrato = str_replace('{{locacao-&gt;horaRetorno}}', $horaRetorno, $textoContrato);
        $textoContrato = str_replace('{{locacao-&gt;kmSaida}}', $kmSaida, $textoContrato);
        $textoContrato = str_replace('{{locacao-&gt;qtdDiarias}}', $qtdDiarias, $textoContrato);
        $textoContrato = str_replace('{{locacao-&gt;valorDiaria}}', $valorDiaria, $textoContrato);
        $textoContrato = str_replace('{{locacao-&gt;valorDesconto}}', $valorDesconto, $textoContrato);
        $textoContrato = str_replace('{{locacao-&gt;valorTotalDesconto}}', $valorTotalDesconto, $textoContrato);
        $textoContrato = str_replace('{{locacao-&gt;obs}}', $obs, $textoContrato);
        
        // dd($textoContrato);

        return view('contrato.resultado', compact('textoContrato'));
    }

    
}
