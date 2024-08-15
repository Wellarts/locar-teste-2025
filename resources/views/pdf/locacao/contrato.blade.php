<!DOCTYPE html>
<html>
<head>

<style>
    .retangulo {
        width: 100%;
        height: 2.5%;
        background-color: rgb(222, 225, 226);
        display: flex;
        align-items: center;
        text-align: center;
    }
    .texto {
        margin: auto;
        font-weight: bold;
        font-size: 16px;

    }
    .tabelas {
        border: 1px;
        border-style: solid;
        border-color: grey;
        width: 100%;
        border-collapse: collapse;
    }


    #ficha td {
    border: 1px solid rgb(160 160 160);
    padding: 8px 10px;
    }


    .tx {
        line-height:1.5;
        font-size: 15px;
    }

</style>

<style>
    .tela {
        width: 100%;
        height: 100px;
        border: 0px solid black;
        float: center;
        text-align: center;

    }
</style>

</head>
<body>

<table style="width: 100%">
  <tr>
    <td><img src="{{ asset('img/logo-hb.png') }}" alt="Image" height="50" width="150"></td>
    <td> <p style="width: 100%; font-size:28px; font-weight: bold;" align="center">HB Moto Center</p>
         <p style="font-size:16px;" align="center">HINKEL E BILCK LOCACAO E COMERCIO LTDA,<br>
                                                             Cnpj: 56.284.481/0001-69,<br>
                                                 e-mail: sinclerbilck@gmail.com, telefone (48) 99052687,<br>
                                                 R. S&atilde;o Pedro, n&deg;1283, Bairro, Areias - S&atilde;o Jos&eacute; /SC,</p>
    </td>
</tr>

</table>
<div class="retangulo">
    <span class="texto">FICHA DE LOCAÇÃO</span>
</div>
<table>
</table>
<div class="retangulo">
<span class="texto">LOCATÁRIO</span>
</div>

<table class="tabelas" width="100%" id='ficha'>
<tr>
    <td colspan="2">
        <b class="tx">Nome:</b> {{$locacao->Cliente->nome}}</p>
    </td>
</tr>
<tr>
    <td colspan="2">
        <b class="tx">Endereço:</b>  {{$locacao->Cliente->endereco}}
    </td>
<tr>
    <td>
        <b class="tx">Cidade:</b> {{$locacao->Cliente->Cidade->nome}}
    </td>
    <td>
        <b class="tx">UF:</b> {{$locacao->Cliente->Estado->nome}}
    </td>
</tr>
<tr>
    <td>
        <b class="tx">Rg:</b> {{$locacao->Cliente->rg}}
    </td>
    <td>
        <b class="tx">Org Exp:</b> {{$locacao->Cliente->exp_rg}}
    </td>

</tr>
<tr>
    <td>
        <b class="tx">Telefones:</b>  {{$tel_1.' - '.$tel_2}}
    </td>
    <td>
        <b class="tx">CPF/CNPJ:</b> {{$cpfCnpj}}
    </td>
</tr>

</table>
</table>
<div class="retangulo">
<span class="texto">VEÍCULO</span>
</div>
<table class="tabelas" id='ficha'>
<tr>
    <td>
        <b class="tx">Marca:</b> {{$locacao->Veiculo->Marca->nome}}
    </td>
    <td>
        <b class="tx">Modelo:</b> {{$locacao->Veiculo->modelo}}
    </td>
    <td>
        <b class="tx">Chassi:</b> {{$locacao->Veiculo->chassi}}
    </td>
</tr>
<tr>
    <td>
        <b class="tx">Ano:</b>  {{$locacao->Veiculo->ano}}
    </td>
    <td>
        <b class="tx">Cor:</b>  {{$locacao->Veiculo->cor}}
    </td>
    <td>
        <b class="tx">Placa:</b>  {{$locacao->Veiculo->placa}}
    </td>
</tr>
</table>
<div class="retangulo">
<span class="texto">LOCAÇÃO</span>
</div>
<table class="tabelas" id='ficha'>
<tr>
    <td>
        <b class="tx">Data da Saída:</b> {{\Carbon\Carbon::parse($locacao->data_saida)->format('d/m/Y')}}
    </td>
    <td>
        <b class="tx">Hora da Saída:</b> {{$locacao->hora_saida}}
    </td>

    <td>
        <b class="tx">Data do Retorno:</b> {{\Carbon\Carbon::parse($locacao->data_retorno)->format('d/m/Y')}}
    </td>
    <td>
        <b class="tx">Hora do Retorno:</b> {{$locacao->hora_retorno}}
    </td>
</tr>
    <td>
        <b class="tx">Km de Saída:</b>  {{$locacao->km_saida}}
    </td>
    <td>
        <b class="tx">Qtd de Diárias:</b> {{$locacao->qtd_diarias}}
    </td>
    <td colspan="2">
        <b class="tx">Valor da Diária R$:</b> {{$locacao->Veiculo->valor_diaria}}
    </td>

</tr>
<tr>
    <td >
        <b class="tx">Km de Retorno:</b> {{$locacao->km_retorno}}
    </td>
    <td >
        <b class="tx">Valor do Desconto R$:</b> {{$locacao->valor_desconto}}
    </td>
    <td colspan="2">
        <b class="tx">Valor Total R$:</b> {{$locacao->valor_total_desconto}}
    </td>

</tr>

</table>

<table class="tabelas" id='ficha'>
<tr>
    <td>
        <b class="tx">Observações: </b> {{$locacao->obs}}
    </td>
</tr>
</table>

<!-- PÁGINA 2 -->

<style>
    .break {
        page-break-before: always;
         }
    .parag {
        text-align: justify;
        font-size: 11;
    }
</style>

<div class="break">

<table style="width: 100%">
    <tr>
        <td><img src="{{ asset('img/logo-hb.png') }}" alt="Image" height="50" width="150"></td>
      <td> <p style="width: 100%; font-size:20px; font-weight: bold" align="center">Contrato de Locação de Veículos</p>

      </td>
  </tr>
  </table>
</div>
<div>
    <div>
        <p style="text-align: justify;" align="left">Pelo presente instrumento particular, de um lado:</p>
        <p style="text-align: justify;" align="justify">HINKEL E BILCK LOCACAO E COMERCIO LTDA - HB Moto Center, Cnpj: 56.284.481/0001-69, e-mail: sinclerbilck@gmail.com, telefone (48) 99052687, R. S&atilde;o Pedro, n&deg;1283, Bairro, Areias - S&atilde;o Jos&eacute; /SC, doravante denominado LOCADOR, e de outro lado;</p>
        <div>{{$locacao->Cliente->nome}}, portador da c&eacute;dula de identidade n&deg; {{$locacao->Cliente->rg}}&nbsp;- {{$locacao->Cliente->exp_rg}} inscrito no CPF {{$locacao->Cliente->cpf}}, endere&ccedil;o; {{$locacao->Cliente->endereco}}, {{$locacao->Cliente->Cidade->nome}}&nbsp;-{{$locacao->Cliente->Estado->nome}}, doravante denominado LOCAT&Aacute;RIO, t&ecirc;m entre si como justo e contratado o que segue:</div>
        </div>
        </div>
        <p style="text-align: justify;" align="justify">CL&Aacute;USULA 1&deg; - DO OBJETO DO CONTRATO</p>
        <p style="text-align: justify;" align="justify">1.1 Por meio deste contrato regular-se a loca&ccedil;&atilde;o de<strong> ve&iacute;culo</strong>:</p>
        <p style="text-align: justify;" align="justify">{{$locacao->Veiculo->modelo}}, <strong>chassi-Renavan</strong> {{$locacao->Veiculo->chassi}}, <strong>cor</strong> {{$locacao->Veiculo->cor}}, <strong>ano</strong> {{$locacao->Veiculo->ano}}, <strong>quilometragem atua</strong>l {{$locacao->Veiculo->km_atual}}, <strong>placas</strong> {{$locacao->Veiculo->placa}}.</p>
        <p style="text-align: justify;" align="justify">1.2 O Ve&iacute;culo descrito acima ser&aacute; utilizado exclusivamente pelo LOCAT&Aacute;RIO, n&atilde;o sendo permitido sub-rogar para terceiros os direitos por ele obtidos atrav&eacute;s do presente contrato, nem permitir que outra pessoa conduza o referido ve&iacute;culo sem a inequ&iacute;voca e expressa autoriza&ccedil;&atilde;o do LOCADOR, sob pena de rescis&atilde;o contratual, multa de R$ 500,00 (quinhentos reais) bem como responsabiliza&ccedil;&atilde;o total por qualquer ato ou dano em rela&ccedil;&atilde;o ao ve&iacute;culo, inclusive os provenientes de caso fortuito ou for&ccedil;a maior.</p>
        <p style="text-align: justify;" align="justify">CL&Aacute;USULA SEGUNDA - DO HOR&Aacute;RIO DO ALUGUEL E LOCAL DE COLETA E DEVOLU&Ccedil;&Atilde;O DO VE&Iacute;CULO.</p>
        <p style="text-align: justify;" align="justify">2.1 A presente loca&ccedil;&atilde;o ter&aacute; o lapso temporal de validade de 365 dias, iniciando no dia 09 de Agosto de 2024 e terminando no dia 09 de agosto de 2025,&nbsp;na qual o ve&iacute;culo dever&aacute; ser devolvido.&nbsp;</p>
        <p style="text-align: justify;" align="justify">2.2 O LOCAT&Aacute;RIO dever&aacute; apresentar o ve&iacute;culo ao locador 01 (uma) vez por m&ecirc;s para a realiza&ccedil;&atilde;o de vistoria, em data e endere&ccedil;o por este designado.</p>
        <p style="text-align: justify;" align="justify">2.3 A n&atilde;o apresenta&ccedil;&atilde;o do ve&iacute;culo no prazo e local supracitados acarretar&aacute; ao LOCAT&Aacute;RIO multa de R$200,00 (duzentos reais) por dia de atraso, al&eacute;m de poss&iacute;vel rescis&atilde;o contratual.</p>
        <p style="text-align: justify;" align="justify"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">&sect; &Uacute;nico &ndash; A presente cl&aacute;usula tem por objetivo manter a motocicleta em perfeitas condi&ccedil;&otilde;es de uso e principalmente promover a ampla prote&ccedil;&atilde;o do Locat&aacute;rio</span></span><span style="color: #ff0000;"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">.</span></span></span></p>
        <p style="text-align: justify;" align="justify">CL&Aacute;USULA 3 - DAS OBRIGA&Ccedil;&Otilde;ES DO LOCADOR</p>
        <p style="text-align: justify;" align="justify">3.1 O ve&iacute;culo objeto do presente contrato ser&aacute; submetido a manuten&ccedil;&atilde;o preventiva peri&oacute;dica, ou em decorr&ecirc;ncia de problemas mec&acirc;nicos e/ou el&eacute;tricos ao quais o LOCAT&Aacute;RIO n&atilde;o deu causa, em oficina mec&acirc;nica designada pelo LOCADOR, nos termos a seguir;</p>
        <p style="text-align: justify;" align="justify">3.1.1 Troca de kit de tra&ccedil;&atilde;o: Sempre que houver barulho anormal e/ou apresentar desgastes excessivo;</p>
        <p style="text-align: justify;" align="justify">3.1.2 Troca de pneus: Quando estiverem no n&iacute;vel do Tread Wear Indicator (TWI).</p>
        <p style="text-align: justify;" align="justify">Par&aacute;grafo &uacute;nico; Quando o limite de quilometragem for superior a 1.000 (um mil) km por semana, ficar&aacute; a cargo do LOCAT&Aacute;RIO a troca de pneus.</p>
        <p style="text-align: justify;" align="justify">3.2 Caso alguma das manuten&ccedil;&otilde;es supracitadas, seja necess&aacute;ria antes ou durante o per&iacute;odo estipulado, dever&aacute; ser arcada integralmente pelo LOCADOR , salvo nos casos em que o LOCAT&Aacute;RIO tenha dado causa ao evento, por mau uso.</p>
        <p style="text-align: justify;" align="justify">3.3 Os gastos decorrentes da manuten&ccedil;&otilde;es preventivas, peri&oacute;dica supracitada, bem como o valor pago pela m&atilde;o de obra do profissional que realizar&aacute; o servi&ccedil;o ser&atilde;o suportados pelo LOCADOR, quando forem necess&aacute;rias e atestadas pelo mec&acirc;nico do mesmo.</p>
        <p style="text-align: justify;" align="justify">3.4 As manuten&ccedil;&otilde;es que n&atilde;o forem citadas na cl&aacute;usula 3.1 tamb&eacute;m ter&atilde;o que ser arcadas pelo LOCADOR, quando forem necess&aacute;rias e atestadas pelo mec&acirc;nico do mesmo.</p>
        <p style="text-align: justify;" align="justify">3.5 No caso de problemas mec&acirc;nicos e/ou el&eacute;tricos (quebra, defeito e/ou desgaste) percebidos em ocasi&atilde;o diversa da manuten&ccedil;&atilde;o preventiva peri&oacute;dica, o LOCAT&Aacute;RIO dever&aacute; informar imediatamente ao LOCADOR, bem como apresentar o ve&iacute;culo a este, no prazo de 24 horas, para reparo a ser realizado em oficina mec&acirc;nica designada pelo LOCADOR.</p>
        <p style="text-align: justify;" align="justify">3.6 O LOCADOR obriga-se a manter Prote&ccedil;&atilde;o Veicular contratada para o ve&iacute;culo objeto do presente contrato, com prote&ccedil;&atilde;o para terceiros limitada a R$50.000,00 (CINQUENTA MIL REAIS).</p>
        <p style="text-align: justify;" align="justify">3.7 &Eacute; de responsabilidade do LOCADOR o pagamento do IPVA, Licenciamento, bem como o pagamento do Seguro Obrigat&oacute;rio do ve&iacute;culo objeto do presente contrato.</p>
        <p style="text-align: justify;" align="justify">3.8 O LOCADOR n&atilde;o se obriga a disponibilizar ve&iacute;culo reserva e n&atilde;o se responsabiliza caso o LOCAT&Aacute;RIO n&atilde;o possa dirigir devido a indisponibilidade do ve&iacute;culo.</p>
        <p style="text-align: justify;" align="justify">CL&Aacute;USULA 4 DAS OBRIGA&Ccedil;&Otilde;ES DO LOCAT&Aacute;RIO</p>
        <p style="text-align: justify;" align="justify">4.1 &Eacute; de responsabilidade do LOCAT&Aacute;RIO a observ&acirc;ncia b&aacute;sica dos itens do ve&iacute;culo como calibragem dos pneus, n&iacute;vel de &oacute;leo do motor, n&iacute;vel de fluido de freio, observ&acirc;ncia da marca&ccedil;&atilde;o do sistema de ilumina&ccedil;&atilde;o e sinaliza&ccedil;&atilde;o, entre outros.</p>
        <p style="text-align: justify;" align="justify">4.1.2 Quaisquer danos/avarias ao ve&iacute;culo ser&atilde;o apurados ao final do contrato e os custos de repara&ccedil;&atilde;o ser&atilde;o arcados pelo LOCAT&Aacute;RIO.</p>
        <p style="text-align: justify;" align="justify">4.1.2 Os custos de revis&otilde;es reparat&oacute;rias causadas pelo mau uso do ve&iacute;culo, correr&atilde;o por conta do LOCAT&Aacute;RIO. Caso a bomba de combust&iacute;vel queime ou danifique por falta de combust&iacute;vel ou neglig&ecirc;ncia quando o ve&iacute;culo estiver em posse do LOCAT&Aacute;RIO, este dever&aacute; arcar com o valor integral da pe&ccedil;a, m&atilde;o de obra, reboque do ve&iacute;culo e demais valores inerentes ao reparo.</p>
        <p style="text-align: justify;" align="justify">4.2 &Eacute; de responsabilidade do LOCAT&Aacute;RIO o pagamento de quaisquer multas relativas &agrave;s infra&ccedil;&atilde;o de tr&acirc;nsito inerentes &agrave; utiliza&ccedil;&atilde;o do ve&iacute;culo cometidas na vig&ecirc;ncia deste contrato.</p>
        <p style="text-align: justify;" align="justify">4.2.1 O pagamento das multas pelo LOCAT&Aacute;RIO deve ser feito imediatamente ap&oacute;s a constata&ccedil;&atilde;o no sistema do DETRAN, <u>independente de qualquer procedimento, seja transfer&ecirc;ncia de pontos ou recurso.</u></p>
        <p style="text-align: justify;" align="justify">4.2.2 O LOCAT&Aacute;RIO concorda que o LOCADOR ir&aacute; indic&aacute;-lo como condutor/infrator respons&aacute;vel pelas infra&ccedil;&otilde;es de tr&acirc;nsito apuradas durante a loca&ccedil;&atilde;o, nos termos do artigo 257, par&aacute;grafos 1&deg;,3&deg;, 7&deg; e 8&deg; do C&oacute;digo de Tr&acirc;nsito, A partir da indica&ccedil;&atilde;o, o LOCAT&Aacute;RIO ter&aacute; legitimidade para se defender perante o &oacute;rg&atilde;o autuador.</p>
        <p style="text-align: justify;" align="justify">4.2.3 Qualquer questionamento sobre eventual improced&ecirc;ncia de infra&ccedil;&atilde;o de tr&acirc;nsito dever&aacute; ser feito exclusivamente pelo LOCAT&Aacute;RIO perante o &oacute;rg&atilde;o autuador.</p>
        <p style="text-align: justify;" align="justify">4.2.4 Caso o LOCAT&Aacute;RIO opte por recorrer da autua&ccedil;&atilde;o e sendo o recurso vitorioso, o LOCADOR lhe fornecer&aacute; c&oacute;pia da guia de pagamento para que ele solicite ao &oacute;rg&atilde;o o reembolso.</p>
        <p style="text-align: justify;" align="justify">4.3 Em ocorrendo multas acima mencionadas, quando a atua&ccedil;&atilde;o da infra&ccedil;&atilde;o chegar ao LOCADOR dever&aacute; o LOCAT&Aacute;RIO comparecer em local e data estipulados pelo locador para assinatura do auto de infra&ccedil;&atilde;o com intuito de transferencia dos pontos para a sua CNH, sob pena de pagar ao LOCADOR a quantias de R$ 200,00 (duzentos reais), em caso de perda do prazo para a transfer&ecirc;ncia dos pontos.</p>
        <p style="text-align: justify;" align="justify">&nbsp;</p>
        <p style="text-align: justify;" align="justify">4.4 Caso o ve&iacute;culo seja rebocado por estacionamento irregular, ou outra hip&oacute;tese a qual tenha dado causa, o LOCAT&Aacute;RIO dever&aacute; arcar com todos os custos necess&aacute;rios para a recupera&ccedil;&atilde;o do ve&iacute;culo junto ao respectivo dep&oacute;sito p&uacute;blico. O LOCAT&Aacute;RIO dever&aacute; arcar tamb&eacute;m com multa contratual de R$50,00 (CINQUENTA REAIS) por dia pelo per&iacute;odo em que a moto estiver no dep&oacute;sito, a t&iacute;tulo de lucro cessante.</p>
        <p style="text-align: justify;" align="justify">4.5 Caso o LOCAT&Aacute;RIO estacione em local diferente do informado ao LOCADOR conforme declara&ccedil;&atilde;o assinada, o LOCAT&Aacute;RIO dever&aacute; arcar com qualquer dano ou preju&iacute;zo pecuni&aacute;rio ao ve&iacute;culo, inclusive inerentes a caso fortuito ou for&ccedil;a maior.</p>
        <p style="text-align: justify;" align="justify">4.6 &Eacute; proibido o LOCAT&Aacute;RIO acionar o servi&ccedil;o de Prote&ccedil;&atilde;o Veicular do ve&iacute;culo objeto deste contrato sem a expressa permiss&atilde;o do LOCADOR, sob pena de multa de R$ 200,00 (DUZENTOS REAIS) al&eacute;m da obriga&ccedil;&atilde;o de arcar com eventuais custos de reboques e/ou transportes necess&aacute;rios, caso o servi&ccedil;o de Prote&ccedil;&atilde;o Veicular n&atilde;o mais os disponibilize devido ao limite de utiliza&ccedil;&otilde;es mensais deste servi&ccedil;o.</p>
        <p style="text-align: justify;" align="justify">4.7 O LOCAT&Aacute;RIO se responsabiliza por quaisquer acess&oacute;rios do ve&iacute;culo que estiverem em sua posse, como por exemplo chave de igni&ccedil;&atilde;o, documento do ve&iacute;culo, etc. Caso algum acess&oacute;rio do ve&iacute;culo seja perdido ou danificado, o LOCAT&Aacute;RIO dever&aacute; arcar com todos os custos necess&aacute;rios &agrave; reposi&ccedil;&atilde;o.</p>
        <p style="text-align: justify;" align="justify">4.8 &Eacute; proibido o LOCAT&Aacute;RIO sair do per&iacute;metro urbano denominado Grande FLORIAN&Oacute;POLIS com o ve&iacute;culo objeto deste contrato sem a autoriza&ccedil;&atilde;o expressa e por escrito do LOCADOR, sob pena de multa de R$ 150,00 (cento e cinquenta reais), al&eacute;m do pagamento dos custos para o retorno do ve&iacute;culo a BASE (ENDERE&Ccedil;O DO LOCADOR), bem como o pagamento de eventuais danos ocorridos com o ve&iacute;culo, inclusive caso fortuito e de for&ccedil;a maior.</p>
        <p style="text-align: justify;" align="justify">4.9 Em caso de roubo ou furto do ve&iacute;culo, o LOCAT&Aacute;RIO se compromete a avisar imediatamente ao LOCADOR, bem como comparecer a delegacia de pol&iacute;cia mais pr&oacute;xima da resid&ecirc;ncia do LOCADOR para registrar a ocorr&ecirc;ncia.</p>
        <p style="text-align: justify;" align="justify">4.10 O LOCAT&Aacute;RIO se compromete a comparecer &agrave; sede da empresa de Prote&ccedil;&atilde;o Veicular, ou outro local especificado pela mesma, a fim de cumprir com procedimento de indeniza&ccedil;&atilde;o do ve&iacute;culo.</p>
        <p style="text-align: justify;" align="justify">4.1.1 Caso o LOCAT&Aacute;RIO se envolva em sinistro estando sob efeito de &aacute;lcool / entorpecente, ou se n&atilde;o fizer teste de embriaguez requerido pela autoridade, este dever&aacute; pagar ao LOCADOR o valor da tabela FIPE do ve&iacute;culo ATUALIZADA, caso a indeniza&ccedil;&atilde;o da Prote&ccedil;&atilde;o Veicular seja negada e/ou com todos os custos inerentes a recupera&ccedil;&atilde;o do ve&iacute;culo junto ao dep&oacute;sito, em caso de reboque.</p>
        <p style="text-align: justify;" align="justify">4.1.2 O LOCAT&Aacute;RIO deve manter as caracter&iacute;sticas originais do ve&iacute;culo, portanto a instala&ccedil;&atilde;o de adesivos, pintura especial, equipamento ou acess&oacute;rios no ve&iacute;culo alugado est&aacute; sujeito a autoriza&ccedil;&atilde;o pr&eacute;via, por escrito do LOCADOR, neste caso, a retirada dos mesmo e a recupera&ccedil;&atilde;o do ve&iacute;culo ao seu estado original s&atilde;o de responsabilidade do LOCAT&Aacute;RIO.</p>
        <p style="text-align: justify;" align="justify">4.13 &Eacute; de responsabilidade do LOCAT&Aacute;RIO trazer o ve&iacute;culo para troca do &oacute;leo do motor a cada 1.000 km rodados, de acordo com as especifica&ccedil;&otilde;es do fabricante do ve&iacute;culo.</p>
        <p style="text-align: justify;" align="justify">Par&aacute;grafo &uacute;nico; quando na apresenta&ccedil;&atilde;o do ve&iacute;culo &agrave; oficina para realizar a troca de &oacute;leo a quilometragem for superior a 1.000 (um mil) km, isto ocorrer&aacute; por conta do LOCAT&Aacute;RIO.</p>
        <p style="text-align: justify;" align="justify">4.14 Aceitar que o LOCADOR promova, pelos meios processuais de que venha a dispor, o seu chamamento aos feitos judiciais promovidos por terceiros decorrentes de eventos com o ve&iacute;culo alugado, cabendo-lhe assumir o p&oacute;lo passivo nas demandas, inclusive quanto ao valores reclamados por terceiros e/ou para assegurar os direitos regressivos do LOCADOR. O LOCAT&Aacute;RIO ser&aacute; respons&aacute;vel pelo pagamento de lucros cessantes que terceiros possam pleitear juridicamente em raz&atilde;o de conduta irregular do LOCAT&Aacute;RIO.</p>
        <p style="text-align: justify;" align="justify">CL&Aacute;USULA 5&deg; - DAS OBRIGA&Ccedil;&Otilde;ES DECORRENTES DE COLIS&Otilde;ES E AVARIAS DO VE&Iacute;CULO</p>
        <p style="text-align: justify;" align="justify">5.1 &Eacute; de responsabilidade do LOCAT&Aacute;RIO o pagamento do reboque, taxas e reparos ao ve&iacute;culo objeto do presente contrato ou a ve&iacute;culo de outrem na ocorr&ecirc;ncia de acidentes e colis&otilde;es sofridas na vig&ecirc;ncia do presente contrato quando n&atilde;o contempladas pela cobertura da Prote&ccedil;&atilde;o Veicular contratada para este ve&iacute;culo, independente de dolo, culpa, negligencia, imprudencia ou impericia do LOCAT&Aacute;RIO.</p>
        <p style="text-align: justify;" align="justify">5.2 Na ocorr&ecirc;ncia de necessidade do pagamento da cota de participa&ccedil;&atilde;o da Prote&ccedil;&atilde;o Veicular, a quantia ser&aacute; integralmente de responsabilidade do LOCAT&Aacute;RIO, no valor de R$1.250,00 (hum mil duzentos e cinquenta reais).</p>
        <p style="text-align: justify;" align="justify">5.3 Ser&aacute; de responsabilidade do LOCAT&Aacute;RIO o pagamento de taxas e di&aacute;ria para a libera&ccedil;&atilde;o do ve&iacute;culo decorrentes de reboque realizado pelo Poder P&uacute;blico, nos casos supracitados.</p>
        <p style="text-align: justify;" align="justify">5.4 A responsabilidade determinada nos itens supracitados permanece estabelecida, inclusive, caso o LOCAT&Aacute;RIO n&atilde;o se encontre no interior do ve&iacute;culo objeto do presente contrato.</p>
        <p style="text-align: justify;" align="justify">CL&Aacute;USULA 6&deg; - DO PAGAMENTO EM RAZ&Atilde;O DA LOCA&Ccedil;&Atilde;O DO VE&Iacute;CULO</p>
        <p style="text-align: justify;" align="justify">6.1 O LOCAT&Aacute;RIO pagar&aacute; ao LOCADOR o valor de R$250,00 (duzentos e cinquenta reais), semanalmente, tendo como data de vencimento sempre na data em que fez a retirada e assinatura do presente instrumento.</p>
        <p style="text-align: justify;" align="justify">Par&aacute;grafo &uacute;nico o n&atilde;o pagamento do valor semanal correspondente ao aluguel, poder&aacute; o locador acionar as for&ccedil;as de seguran&ccedil;a para buscar e localizar o ve&iacute;culo, bem como poder&aacute; recuper&aacute;-la sem aviso pr&eacute;vio, por seus meios pr&oacute;prios.</p>
        <p style="text-align: justify;" align="justify">6.2 Caso o pagamento seja feito ap&oacute;s a data acordada, o valor sofrera um acrescimo de R$ 50,00 (CINQUENTA REAIS), a t&iacute;tulo de multa, bem como um acr&eacute;scimo de R$ 7,00 (sete reais) por dia de atraso a t&iacute;tulo de juros.</p>
        <p style="text-align: justify;" align="justify">6.3 Fica o LOCAT&Aacute;RIO obrigado a encaminhar o comprovante de pagamento ao LOCADOR no dia do pagamento valendo o mesmo como recibo.</p>
        <p style="text-align: justify;" align="justify">CL&Aacute;USULA 7&deg; DA QUANTIA CAU&Ccedil;&Atilde;O</p>
        <p style="text-align: justify;" align="justify">7.1 Estabelecem as partes, a QUANTIA CAU&Ccedil;&Atilde;O no valor de R$250,00 (duzentos e cinquenta reais) a serem pagos da seguinte forma; R$250,00 (duzentos e cinquenta reais) na assinatura deste contrato.</p>
        <p style="text-align: justify;" align="justify">7.2 Ao t&eacute;rmino da vig&ecirc;ncia do presente contrato caber&aacute; ao LOCADOR restituir a integralidade da QUANTIA CAU&Ccedil;&Atilde;O ao LOCAT&Aacute;RIO no prazo de 20 (vinte) dias &uacute;teis a contar da devolu&ccedil;&atilde;o do ve&iacute;culo por parte do LOCAT&Aacute;RIO conforme as seguinte CONDI&Ccedil;&Otilde;ES.</p>
        <ul style="text-align: justify;">
        <li>
        <p align="justify">A devolu&ccedil;&atilde;o do ve&iacute;culo em perfeito estado, em condi&ccedil;&otilde;es equivalentes a observada ao &uacute;ltimo check list de vistoria e ap&oacute;s vistoria feita por v&iacute;deo enviada para o whatsapp do LOCADOR. * Inexist&ecirc;ncia de alugu&eacute;is, multas de tr&acirc;nsito ou multas por descumprimento contratual pendentes por parte do LOCAT&Aacute;RIO.</p>
        </li>
        <li>
        <p align="justify">Ap&oacute;s feita a manuten&ccedil;&atilde;o necess&aacute;ria do ve&iacute;culo, caso haja necessidade.</p>
        </li>
        <li>
        <p align="justify">Ap&oacute;s descontados quaisquer outros d&eacute;bitos pendentes.</p>
        </li>
        </ul>
        <p style="text-align: justify;" align="justify">7.3 Na hip&oacute;tese de n&atilde;o estarem observadas as condi&ccedil;&otilde;es acima dispostas, poder&aacute; o LOCADOR utilizar-se da QUANTIA CAU&Ccedil;&Atilde;O para adimplir eventuais d&eacute;bitos ou reparar danos causados ao ve&iacute;culo que n&atilde;o decorram do desgaste natural e utiliza&ccedil;&atilde;o adequada do bem, hip&oacute;tese na qual s&oacute; ser&aacute; de direito do LOCAT&Aacute;RIO a quantia remanescente a tal utiliza&ccedil;&atilde;o da QUANTIA CAU&Ccedil;&Atilde;O, se houver.</p>
        <p style="text-align: justify;" align="justify">7.4 Os gastos com o combust&iacute;vel do ve&iacute;culo dever&atilde;o ser arcados integralmente pelo LOCAT&Aacute;RIO, devendo sempre devolver o ve&iacute;culo com a mesma quantidade de combust&iacute;vel contida no ve&iacute;culo quando da entrega do mesmo pelo LOCADOR, sob pena de desconto da QUANTIA CAU&Ccedil;&Atilde;O do valor necess&aacute;rio a atingir tal quantidade de combust&iacute;vel.</p>
        <p style="text-align: justify;" align="justify">7.5 Qualquer valor inerente &agrave; cobran&ccedil;a por passagem, estacionamento ou ped&aacute;gio do ve&iacute;culo durante a posse do LOCAT&Aacute;RIO dever&aacute; por este ser arcado. Caso o LOCADOR seja cobrado por qualquer valor desta natureza, o LOCAT&Aacute;RIO dever&aacute; reembols&aacute;-lo imediatamente.</p>
        <p style="text-align: justify;" align="justify">7.6 Caso o ve&iacute;culo seja devolvido sujo, ser&aacute; cobrada a lavagem simples R$45,00 (quarenta e cinco reais) ou especial R$100,00 (cem reais), dependendo do seu estado. Na hip&oacute;tese de lavagem especial ser&aacute; cobrada tamb&eacute;m 1 (um) di&aacute;ria de loca&ccedil;&atilde;o ou quantas forem necess&aacute;rias at&eacute; a disponibiliza&ccedil;&atilde;o do ve&iacute;culo. Limitado a 10 (dez) dias.</p>
        <p style="text-align: justify;" align="justify">7.7 Quando o documento do ve&iacute;culo n&atilde;o for devolvido, ser&aacute; cobrado o reembolso das despesas para obten&ccedil;&atilde;o de 2&deg; via e, diante da impossibilidade do ve&iacute;culo n&atilde;o ser alugado ser&aacute; cobrado o valor de R$50,00 (cinquenta reais) de multa di&aacute;ria..</p>
        <p style="text-align: justify;" align="justify">CL&Aacute;USULA 8&deg; - DA VIG&Ecirc;NCIA E RESCIS&Atilde;O</p>
        <p style="text-align: justify;" align="justify">8.1 O presente contrato se inicia na data de sua assinatura com prazo m&iacute;nimo de 365 dias de loca&ccedil;&atilde;o, ap&oacute;s esse prazo a vig&ecirc;ncia &eacute; indeterminada, salvo manifesta&ccedil;&atilde;o de qualquer das partes em contr&aacute;rio, motivada por resili&ccedil;&atilde;o ou descumprimento contratual ocasionado pela parte contr&aacute;ria.</p>
        <p style="text-align: justify;" align="justify">8.1.1 Em caso de devolu&ccedil;&atilde;o antecipada inferior a 30 dias o LOCAT&Aacute;RIO pagar&aacute; uma multa no valor de R$500,00 (quinhentos reais). Se o Locat&aacute;rio estiver impossibilitado de conduzir o ve&iacute;culo por doen&ccedil;a, o instrumento poder&aacute; ser encerrado dispensando de multas, desde que prescrito atrav&eacute;s de atestado m&eacute;dico v&aacute;lido.</p>
        <p style="text-align: justify;" align="justify">8.2 &Eacute; assegurado &agrave;s partes a resili&ccedil;&atilde;o do presente CONTRATO a qualquer tempo, bastando para tanto, da ci&ecirc;ncia a outra parte, cabendo ao LOCAT&Aacute;RIO a devolu&ccedil;&atilde;o do ve&iacute;culo ao LOCADOR em local designado por este no seguinte prazo:</p>
        <ul style="text-align: justify;">
        <li>
        <p align="justify">24 horas a contar da comunica&ccedil;&atilde;o ao LOCADOR, no caso em que o LOCAT&Aacute;RIO resilir o presente contrato.</p>
        </li>
        <li>
        <p align="justify">24 horas a contar do momento em que teve ci&ecirc;ncia da resili&ccedil;&atilde;o, quando realizada pelo LOCADOR.</p>
        </li>
        </ul>
        <p style="text-align: justify;" align="justify">8.3 O contrato poder&aacute; ser considerado rescindido de pleno direito pelo LOCADOR, independente de qualquer notifica&ccedil;&atilde;o, e este, sem mais formalidades, providenciar&aacute; a retomada do ve&iacute;culo, sem que isso enseje ao LOCAT&Aacute;RIO qualquer direito de reten&ccedil;&atilde;o, indeniza&ccedil;&atilde;o ou devolu&ccedil;&atilde;o da QUANTIA CAU&Ccedil;&Atilde;O, quando:</p>
        <ul style="text-align: justify;">
        <li>
        <p align="justify">O ve&iacute;culo n&atilde;o for devolvido na data, hora e local previamente ajustado;</p>
        </li>
        <li>
        <p align="justify">Ocorrer o uso inadequado do ve&iacute;culo;</p>
        </li>
        <li>
        <p align="justify">Ocorrer apreens&atilde;o do ve&iacute;culo locado por autoridades competentes;</p>
        </li>
        <li>
        <p align="justify">O LOCAT&Aacute;RIO acumular uma d&iacute;vida superior a R$ 100,00 (cem reais) e n&atilde;o a quite imediatamente, caso no qual o ve&iacute;culo dever&aacute; ser entregue em local determinado pelo LOCADOR, imediatamente, sob pena de multa de R$ 150,00 (cento e cinquenta reais) por dia, salvo acordo contr&aacute;rio entre as partes.</p>
        </li>
        </ul>
        <p style="text-align: justify;" align="justify">8.3 Fica desde j&aacute; pactuado a total inexist&ecirc;ncia de v&iacute;nculo trabalhista entre as partes do presente contrato, sendo indevida toda e qualquer incid&ecirc;ncia das obriga&ccedil;&otilde;es previdenci&aacute;rias e os encargos sociais, n&atilde;o havendo entre as partes qualquer tipo de subordina&ccedil;&atilde;o e controle t&iacute;picos de rela&ccedil;&otilde;es de emprego.</p>
        <p style="text-align: justify;" align="justify">8.4 Nos termos do artigo 265 do C&oacute;digo Civil Brasileiro, inexiste solidariedade, seja contratual ou legal entre o locador e o LOCAT&Aacute;RIO, raz&atilde;o pela qual, com a loca&ccedil;&atilde;o e a efetiva retirada do ve&iacute;culo alugado, o LOCAT&Aacute;RIO assume sua posse aut&ocirc;noma para todos os fins de direito, responsabilizando-se por eventuais indeniza&ccedil;&otilde;es decorrentes do uso e circula&ccedil;&atilde;o do ve&iacute;culo, cuja responsa&acute;bilidades perdurar&aacute; at&eacute; a efetiva devolu&ccedil;&atilde;o do ve&iacute;culo alugado.</p>
        <p style="text-align: justify;" align="justify">CL&Aacute;USULA 9&deg; DA DEVOLU&Ccedil;&Atilde;O DO VE&Iacute;CULO</p>
        <p style="text-align: justify;" align="justify">9.1 Ao t&eacute;rmino do contrato, o ve&iacute;culo deve ser devolvido em local dia e hora indicado pelo LOCADOR, sob pena de multa de R$50,00 (cinquenta reais) por dia.</p>
        <p style="text-align: justify;" align="justify">9.2 A n&atilde;o devolu&ccedil;&atilde;o de ve&iacute;culo pelo LOCAT&Aacute;RIO, ap&oacute;s notifica&ccedil;&atilde;o realizada pelo LOCADOR, configura crime de APROPRIA&Ccedil;&Atilde;O IND&Eacute;BITA conforme artigo 168 do C&oacute;digo Penal Brasileiro, com pena de reclus&atilde;o de um a quatro anos de pris&atilde;o e multa.</p>
        <p style="text-align: justify;" align="justify">CL&Aacute;USULA 10&deg; - DA DISPOSI&Ccedil;&Otilde;ES GERAIS</p>
        <p style="text-align: justify;" align="justify">10.1 Quaisquer notifica&ccedil;&otilde;es e comunica&ccedil;&otilde;es enviadas sob esse contrato podem ser realizadas de forma eletr&ocirc;nica (e-mail ou whatsapp), escritas ou por correspond&ecirc;ncia com aviso de recebimento aos endere&ccedil;os constantes do pre&acirc;mbulo. Em havendo altera&ccedil;&atilde;o do endere&ccedil;o ficam as partes obrigadas a fornecer tal informa&ccedil;&atilde;o.</p>
        <p style="text-align: justify;" align="justify">10.2 Todos os valores, despesas e encargos da loca&ccedil;&atilde;o constituem d&iacute;vidas l&iacute;quidas e certas para pagamento &agrave; vista, pass&iacute;veis de cobran&ccedil;as executivas.</p>
        <p style="text-align: justify;" align="justify">10.3 Eventuais toler&acirc;ncias do LOCADOR para com o LOCAT&Aacute;RIO no cumprimento das obriga&ccedil;&otilde;es ajustadas neste contrato constituem mera liberalidade, n&atilde;o importando em hip&oacute;tese alguma em nova&ccedil;&atilde;o ou ren&uacute;ncia, permanecendo &iacute;ntegras as cl&aacute;usulas e condi&ccedil;&otilde;es aqui contratadas.</p>
        <p style="text-align: justify;" align="justify">10.4 O LOCAT&Aacute;RIO autoriza O LOCADOR a coletar, usar e divulgar sua imagem para fins de cadastro, defesa e/ou promo&ccedil;&atilde;o.</p>
        <p style="text-align: justify;" align="justify">10.5 O LOCAT&Aacute;RIO concorda que a sua assinatura no contrato implica ci&ecirc;ncia e ades&atilde;o por si, seus herdeiros e/ou promo&ccedil;&atilde;o.</p>
        <p style="text-align: justify;" align="justify">10.6 Fica eleito o foro desta cidade e Comarca de S&Atilde;O JOS&Eacute;/SC, como competente para dirimir quaisquer quest&otilde;es que possam advir da aplica&ccedil;&atilde;o dos presente CONTRATO, por mais privilegiado que seja ou venha a ser, qualquer FORO.</p>
        <p style="text-align: justify;" align="justify">10.7 E, por estarem assim, justas e contratadas, as partes firmam o presente instrumento em 02 (duas) via de igual teor e forma, para que produza seus efeitos legais, ap&oacute;s ter lido o seu conte&uacute;do ter sido claramente entendido e aceito.</p>
        <p style="text-align: justify;" align="justify">&nbsp;</p>
        </div>
        <p style="text-align: justify;">&nbsp;</p>

</div><br><br>

        <div style="text-align: center; font-size: 12">Rio de Janeiro, {{ $dataAtual->isoFormat('DD MMMM YYYY') }}<br><br><br><br>

            ___________________________________________________________<br>
            LOCATÁRIO: {{$locacao->Cliente->nome}}<br><Br><br><br>

            ___________________________________________________________<br>
            LOCADOR: MOTOMASTER CAMPO GRANDE LTDA.



        </div>











</body>
</html>
