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
        padding: 0px 2px;
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
    <td><img src="{{ asset('img/logo_contrato.png') }}" alt="Image" height="50" width="150"></td>
    <td> <p style="font-size:16px;" align="right"><b>MCK AUTOMOTORES EIRELI</b><br>
                                                   CNPJ: 05.363.545/0001-86<br>
                                                    Contato:  (27)99583-8606 / 99231-8461<br>
                                                    mck@mcklocadora.com.br<br>
                                                 
                                                 Av. Desembargador Mario da Silva Nunes, 568,<br>
                                                 Jardim Limoeiro, - SERRA - ES, CEP: 29164-044<br>
                                                 </p>
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
<tr>
    <td>
        <b class="tx">CNH:</b>  {{$locacao->Cliente->cnh}}
    </td>
    <td>
        <b class="tx">Validade CNH:</b> {{\Carbon\Carbon::parse($locacao->Cliente->validade_cnh)->format('d/m/Y')}}
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
        <b class="tx">Renavan:</b> {{$locacao->Veiculo->renavan}}
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

<div class="container">
    <div class="tela">
        <table>
            <tr>
                <td>
                    <h3>Inspeção de Veículo</h3>
                    <table>
                        <tr>
                            <td>( ) Documento</td>
                            <td>( ) Retrovisores</td>
                        </tr>
                        <tr>
                            <td>( ) Calota</td>
                            <td>( ) Antena</td>
                        </tr>
                        <tr>
                            <td>( ) Macaco</td>
                            <td>( ) Limpeza</td>
                        </tr>
                        <tr>
                            <td>( ) Estepe</td>
                            <td>( ) Tapetes</td>
                        </tr>
                        <tr>
                            <td>( ) Trava</td>
                            <td>( ) Ar Condicionado</td>
                        </tr>
                        <tr>
                            <td>( ) Triângulo</td>
                            <td>( ) Som</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

    </div>
</div>
<div style="margin-left: 300px">
    <table style="width: 100%">
        <tr>
            <td><p style="margin-left: 90px">SERRA - ES, {{ $dataAtual->isoFormat('DD MMMM YYYY') }}</p></td>
        </tr>
        
        <tr>
            <td>
                <tr>
                    <td><center>_________________________________________</center><br>
                                <center>LOCADOR: EXPRESSO RENT CAR.</center>
                    <p style = "font-size:10px; text-align: center">Proprietário ou representante legal da Empresa</p>
                    </td>
                </tr>

            </td>
        </tr>

        <tr>
            <td>
                <tr>
                    <td>
                        <div>
                           <center> _________________________________________</center><br>
                                    <center>LOCATÁRIO: {{$locacao->Cliente->nome}}</center>

                        </div>
                    </td>
                </tr>

            </td>
        </tr>
       </table>

</div>
<div style="margin-top: 50px">Observações da Inspeção:_________________________________________________________________<br>
______________________________________________________________________________________</div>

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
        <td><img src="{{ asset('img/logo_contrato.png') }}" alt="Image" height="50" width="150"></td>
      <td> <p style="width: 100%; font-size:20px; font-weight: bold" align="center">Contrato de Locação de Veículos</p>

      </td>
  </tr>
  </table>
</div>
<div>
    <div>
        
        <p style="text-align: justify;"><strong>CL&Aacute;USULAS CONTRATUAIS</strong></p>
        <p style="text-align: justify;">Pelo presente instrumento particular, as partes supracitadas celebram o presente Contrato de Loca&ccedil;&atilde;o de Ve&iacute;culos nas condi&ccedil;&otilde;es aduzidas a seguir:&nbsp;</p>
        <ol style="text-align: justify;">
        <li><strong> SIGNIFICA&Ccedil;&Atilde;O</strong></li>
        </ol>
        <p style="text-align: justify;">1.1 A MCK Automotores Eireli EPP, Av Desembargador Mario da Silva Nunes, 568, Jardim Limoeiro, Serra/ES, CNPJ sob o N&ordm; 05.363.545/0001.86 e&nbsp;Doravante designada LOCADORA e o LOCAT&Aacute;RIO assim designado identificado no Demonstrativo de Aluguel de Ve&iacute;culo, tem entre si justo e aven&ccedil;ado o presente Contrato de Loca&ccedil;&atilde;o de Ve&iacute;culos.</p>
        <p style="text-align: justify;">1.2 O Demonstrativo de Aluguel de Ve&iacute;culo &eacute; o documento que identifica os contratantes, o ve&iacute;culo alugado, pre&ccedil;os (tarifas e servi&ccedil;os) prazo, entrega, devolu&ccedil;&atilde;o e condi&ccedil;&otilde;es contratadas.</p>
        <ol style="text-align: justify;" start="2">
        <li><strong> OBJETO DA LOCA&Ccedil;&Atilde;O </strong></li>
        </ol>
        <p style="text-align: justify;">2.1 O ve&iacute;culo objeto da loca&ccedil;&atilde;o, com respectivos acess&oacute;rios, caracteriza&ccedil;&atilde;o e discrimina&ccedil;&atilde;o, &eacute; entregue em perfeitas condi&ccedil;&otilde;es de uso, funcionamento e seguran&ccedil;a devidamente constatados pelo LOCAT&Aacute;RIO, no ato da assinatura do Demonstrativo de Aluguel de Ve&iacute;culo, referente ao CONTRATO DE LOCA&Ccedil;&Atilde;O DE VE&Iacute;CULOS e em conformidade com o Recibo de Entrega do Ve&iacute;culo denominado - Check -list de Sa&iacute;da e Retorno de Ve&iacute;culo.</p>
        <p style="text-align: justify;">2.2. O LOCAT&Aacute;RIO declara estar recebendo o ve&iacute;culo objeto da loca&ccedil;&atilde;o, seus acess&oacute;rios e equipamentos, descrito no contrato de loca&ccedil;&atilde;o entregue em perfeitas condi&ccedil;&otilde;es de uso, conserva&ccedil;&atilde;o, funcionamento e seguran&ccedil;a, constatados no ato da assinatura do contrato, de acordo com a vistoria de recebimento do ve&iacute;culo.</p>
        <p style="text-align: justify;">2.2.1 O LOCAT&Aacute;RIO declara que acompanhou a vistoria do ve&iacute;culo locado, conjuntamente por um funcion&aacute;rio da LOCADORA, assinando o respectivo Check-list no qual s&atilde;o especificadas as condi&ccedil;&otilde;es em que ser&aacute; entregue o ve&iacute;culo ao LOCAT&Aacute;RIO, bem como eventuais avarias pr&eacute;-existentes.</p>
        <ol style="text-align: justify;" start="2">
        <li>2<strong>. </strong>3 O ve&iacute;culo ser&aacute; utilizado, exclusivamente no territ&oacute;rio nacional, em vias de rodagem e condi&ccedil;&otilde;es adequadas &agrave; respectiva utiliza&ccedil;&atilde;o e aplica&ccedil;&atilde;o.</li>
        </ol>
        <p style="text-align: justify;">2.3.1. O ve&iacute;culo n&atilde;o poder&aacute; ser utilizado para fins diversos de sua destina&ccedil;&atilde;o espec&iacute;fica, indicada no manual do fabricante e certificado de registro. Se a LOCADORA constatar que o LOCAT&Aacute;RIO, seus representantes e/ou seus condutores adicionais est&aacute;(&atilde;o) utilizando o ve&iacute;culo em condi&ccedil;&otilde;es que caracterizem neglig&ecirc;ncia, imprud&ecirc;ncia, imper&iacute;cia ou mau uso, poder&aacute;, a qualquer tempo, rescindir o CONTRATO DE LOCA&Ccedil;&Atilde;O, independentemente de qualquer notifica&ccedil;&atilde;o judicial ou extrajudicial e sem maiores formalidades, proceder a retomada e o recolhimento do VE&Iacute;CULO, ficando o LOCAT&Aacute;RIO solidariamente respons&aacute;vel com seus representantes e/ou condutores adicionais, conforme o caso, pelo pagamento de todas as di&aacute;rias utilizadas, acrescidas das taxas correspondentes, assim como de quaisquer outras cobran&ccedil;as adicionais que possam ser geradas em virtudes do uso indevido, incluindo mas n&atilde;o limitando a colis&otilde;es e danos.</p>
        <p style="text-align: justify;">2.3.2. Na hip&oacute;tese do LOCAT&Aacute;RIO entregar o ve&iacute;culo, sob qualquer pretexto, condutor n&atilde;o identificado no demonstrativo de aluguel, com a documenta&ccedil;&atilde;o necess&aacute;ria exigida pela LOCADORA e, sobrevindo qualquer sinistro, fica alertado que o seguro contratado n&atilde;o arcar&aacute; com a indeniza&ccedil;&atilde;o, logo, ficar&aacute; a cargo do LOCAT&Aacute;RIO todas as despesas envolvendo o ve&iacute;culo, bem como, terceiros<strong>.</strong></p><br>
        <ol style="text-align: justify;" start="3">
        <li><strong> DO PRAZO E VALOR DA LOCA&Ccedil;&Atilde;O</strong></li>
        </ol>
        <p style="text-align: justify;">3.1. O prazo e valor da loca&ccedil;&atilde;o s&atilde;o aqueles declarados no &ldquo;Demonstrativo de Aluguel de Ve&iacute;culo&rdquo;. O total a pagar, de responsabilidade do LOCAT&Aacute;RIO, &eacute; o valor apontado no <strong>DEMONSTRATIVO DE C&Aacute;LCULO </strong>(item, unidade, Valor Unit&aacute;rio, Desconto, Total), considerando a forma de loca&ccedil;&atilde;o&nbsp;(di&aacute;rio, semanal, mensal ou demonstrativo de aluguel); acrescido do pre&ccedil;o da quilometragem excedente.(aferida por meio do hod&ocirc;metro do ve&iacute;culo ou meio utilizado pela empresa), quando for o caso. &Eacute; de responsabilidade do LOCAT&Aacute;RIO entre outras despesas, quando for o caso, oriundas de servi&ccedil;os de motorista, taxa de entrega, prote&ccedil;&atilde;o contra danos, inc&ecirc;ndio, furto ou roubo, reposi&ccedil;&atilde;o do combust&iacute;vel e outras incid&ecirc;ncias decorrente de legisla&ccedil;&atilde;o vigente, bem como as cl&aacute;usulas previstas verso e anverso deste instrumento, tudo de acordo com a tarifa praticada pela LOCADORA, deduzidos eventuais descontos aven&ccedil;ados entre as partes, por escrito e as antecipa&ccedil;&otilde;es realizadas pelo LOCAT&Aacute;RIO.</p>
        <p style="text-align: justify;">3.2 Ocorrendo viola&ccedil;&atilde;o do lacre do hod&ocirc;metro, ser&aacute; cobrada a tarifa praticada para as loca&ccedil;&otilde;es com quilometragem livre, al&eacute;m de multa equivalente aos dias versus valor unit&aacute;rio do presente contrato.</p>
        <p style="text-align: justify;">3.3 O pagamento devido pela loca&ccedil;&atilde;o far-se-&aacute; do seguinte modo: sempre de forma antecipada.</p>
        <ol style="text-align: justify;">
        <li>a) se o prazo for di&aacute;rio, no in&iacute;cio ao t&eacute;rmino da loca&ccedil;&atilde;o; b) se o prazo for semanal, no in&iacute;cio ao t&eacute;rmino da loca&ccedil;&atilde;o; c) se o prazo for mensal, no trig&eacute;simo dia da loca&ccedil;&atilde;o e, assim por diante, sucessivamente, at&eacute;, o t&eacute;rmino da loca&ccedil;&atilde;o.</li>
        </ol>
        <p style="text-align: justify;">3.3.1 No caso de loca&ccedil;&atilde;o por prazo mensal, fica o LOCAT&Aacute;RIO obrigado a realizar o pagamento da mensalidade integral, mesmo que venha devolver o ve&iacute;culo antes do prazo estipulado no contrato, isto &eacute;, n&atilde;o ser&aacute; calculado tarifa <em>pro rata die</em> &ndash; tarifa proporcional aos dias locados &ndash; nessa modalidade de loca&ccedil;&atilde;o.</p>
        <p style="text-align: justify;">3.4 Em caso de atraso no pagamento, os valores ser&atilde;o devidos com a inclus&atilde;o de encargos morat&oacute;rios legais, na margem de multa de 5% (CINCO POR CENTO) sobre o vencimento&nbsp;&nbsp; e juros de 0,33% (ZERO V&Iacute;RGULA TRINTA E TR&Ecirc;S POR CENTO) ao dia, sem preju&iacute;zo das demais comina&ccedil;&otilde;es legais como despesas extrajudiciais para cobran&ccedil;a e honor&aacute;rios advocat&iacute;cios. <br />&nbsp;3.5 A prorroga&ccedil;&atilde;o da loca&ccedil;&atilde;o dever&aacute; ser comunicada pelo LOCAT&Aacute;RIO a LOCADORA com no m&iacute;nimo 48 (quarenta e oito) horas de anteced&ecirc;ncia ao t&eacute;rmino do CONTRATO DE LOCA&Ccedil;&Atilde;O e uma vez aprovada a prorroga&ccedil;&atilde;o pela LOCADORA o LOCAT&Aacute;RIO dever&aacute; comparecer a loja para efetuar o pagamento das di&aacute;rias utilizadas e assinatura da prorroga&ccedil;&atilde;o da loca&ccedil;&atilde;o.</p>
        <p style="text-align: justify;">3.6 Independentemente da assinatura da prorroga&ccedil;&atilde;o do CONTRATO DE LOCA&Ccedil;&Atilde;O, o LOCAT&Aacute;RIO concorda e reconhece desde j&aacute; que ser&aacute; &uacute;nico e integralmente respons&aacute;vel <u><strong>por qualquer avaria, multas, di&aacute;rias ou qualquer ocorr&ecirc;ncia durante o per&iacute;odo que permanecer com o ve&iacute;culo</strong></u>, ainda que n&atilde;o tenha assinado a prorroga&ccedil;&atilde;o do CONTRATO DE LOCA&Ccedil;&Atilde;O. Todas as multas lavradas por infra&ccedil;&otilde;es de tr&acirc;nsito cometidas durante o per&iacute;odo em que permanecer com o VE&Iacute;CULO ainda que n&atilde;o tenha assinado a prorroga&ccedil;&atilde;o do CONTRATO DE LOCA&Ccedil;&Atilde;O, bem como pelo pagamento de eventuais agravos decorrentes da n&atilde;o aceita&ccedil;&atilde;o pelas autoridades de tr&acirc;nsito da indica&ccedil;&atilde;o do LOCAT&Aacute;RIO como condutor do VE&Iacute;CULO, e/ou pela falta de assinatura em instrumento de prorroga&ccedil;&atilde;o de loca&ccedil;&atilde;o.</p>
        <p style="text-align: justify;">3.7 Na hip&oacute;tese de avaria(s), multas, di&aacute;rias, combust&iacute;vel e/ou qualquer ocorr&ecirc;ncia na vig&ecirc;ncia do contrato, ser&aacute; cobrado uma taxa administrativa na ordem de 20%&nbsp;(vinte por cento) correspondente a(s) infra&ccedil;&atilde;o(&otilde;es); incluindo aqui entre outras as ocorr&ecirc;ncias previstas do item 3.6.&nbsp;</p>
        <ol style="text-align: justify;" start="4">
        <li><strong> DA DEVOLU&Ccedil;&Atilde;O DO VE&Iacute;CULO</strong></li>
        </ol>
        <p style="text-align: justify;">4.1 O LOCAT&Aacute;RIO obriga-se a devolver o carro alugado nas depend&ecirc;ncias da LOCADORA, onde ser&aacute; realizado a vistoria do ve&iacute;culo.</p>
        <p style="text-align: justify;">4.2 Na hip&oacute;tese de o carro alugado, por qualquer motivo, vir a ser rebocado por autoridades competentes, a LOCADORA somente reconhecer&aacute; a devolu&ccedil;&atilde;o do carro e o encerramento da loca&ccedil;&atilde;o quando estiver com a posse f&iacute;sica do bem, isto &eacute;, havendo necessidade de qualquer desembara&ccedil;o para a LOCADORA reaver o bem, aplica-se contagem de prazo sob responsabilidade do LOCAT&Aacute;RIO.</p>
        <p style="text-align: justify;">4.3 Na hip&oacute;tese de acidente ou inc&ecirc;ndio envolvendo o carro alugado, a LOCADORA somente reconhecer&aacute; a devolu&ccedil;&atilde;o do carro e o encerramento da loca&ccedil;&atilde;o quando estiver com a posse f&iacute;sica do bem.</p>
        <p style="text-align: justify;">4.4. Ocorrendo furto ou roubo do carro alugado, a LOCADORA somente reconhecer&aacute; o encerramento da loca&ccedil;&atilde;o na data e hora do Boletim de Ocorr&ecirc;ncia, independentemente da data e hora da ocorr&ecirc;ncia do fato.</p>
        <p style="text-align: justify;">4.5 O atraso na devolu&ccedil;&atilde;o do carro configurar-se-&aacute;, automaticamente, em apropria&ccedil;&atilde;o ind&eacute;bita.</p>
        <p style="text-align: justify;">4.6&nbsp; Caracterizada a apropria&ccedil;&atilde;o ind&eacute;bita, o LOCAT&Aacute;RIO ficar&aacute; sujeito &agrave;s san&ccedil;&otilde;es penais e civis que dela decorrerem, arcando ainda com todas as despesas judiciais e/ou extrajudiciais que a LOCADORA realizar na busca, apreens&atilde;o e efetiva reintegra&ccedil;&atilde;o da posse do carro alugado, bem como, honor&aacute;rios de 20% advocat&iacute;cios.&nbsp;</p>
        <p style="text-align: justify;">4.7 A LOCADORA somente reconhecer&aacute; o encerramento da loca&ccedil;&atilde;o na data e hora do Boletim de Ocorr&ecirc;ncia, independentemente da data e hora da ocorr&ecirc;ncia do fato. Nessa hip&oacute;tese, o valor do aluguel contratado at&eacute; a data e hora do registro da ocorr&ecirc;ncia ser&aacute; cobrado pela LOCADORA, sem preju&iacute;zo da responsabilidade do Cliente pelos danos a que der causa, nos termos e para os fins do art. 575 do C&oacute;digo Civil.</p>
        <ol style="text-align: justify;" start="5">
        <li><strong> OBRIGA&Ccedil;&Otilde;ES DO LOCAT&Aacute;RIO</strong></li>
        </ol>
        <p style="text-align: justify;">5.1 Pagar pontualmente o aluguel do ve&iacute;culo e servi&ccedil;os adicionais.</p>
        <p style="text-align: justify;">5.2 No t&eacute;rmino do CONTRATO DE LOCA&Ccedil;&Atilde;O, devolver o ve&iacute;culo com acess&oacute;rios e equipamentos nas mesmas condi&ccedil;&otilde;es em que o recebeu no in&iacute;cio do CONTRATO DE LOCA&Ccedil;&Atilde;O, admitindo-se, t&atilde;o somente, o desgaste natural pelo uso regular, de acordo com as recomenda&ccedil;&otilde;es do fabricante. Quaisquer danos causados ao VE&Iacute;CULO e/ou aos seus acess&oacute;rios e equipamentos, conforme o caso, durante a vig&ecirc;ncia do referido CONTRATO DE LOCA&Ccedil;&Atilde;O, sejam eles de responsabilidade direta ou indireta, ser&atilde;o cobrados ao LOCAT&Aacute;RIO em sua totalidade independentemente de culpa.</p>
        <p style="text-align: justify;">5.2.1 O LOCAT&Aacute;RIO concorda que se o VE&Iacute;CULO for devolvido em condi&ccedil;&otilde;es de higiene e limpeza que impossibilitem a identifica&ccedil;&atilde;o de danos ou avarias (internas, externas ou aos acess&oacute;rios) no ato de sua devolu&ccedil;&atilde;o, ser&aacute; solicitada nova vistoria e confer&ecirc;ncia ap&oacute;s a lavagem do VE&Iacute;CULO. O LOCAT&Aacute;RIO concorda e reconhece que as cobran&ccedil;as correspondentes a tais avarias ser&atilde;o feitas diretamente ao LOCAT&Aacute;RIO, mesmo ap&oacute;s o encerramento do CONTRATO DE LOCA&Ccedil;&Atilde;O.</p>
        <p style="text-align: justify;">5.2.2 Responsabiliza-se tamb&eacute;m o LOCAT&Aacute;RIO pelas avarias do ve&iacute;culo alugado, quando n&atilde;o cobertas pela prote&ccedil;&atilde;o contratada, sendo do seu</p>
        <p style="text-align: justify;">conhecimento que pneus, suspen&ccedil;&atilde;o, itens mec&acirc;nicos e acess&oacute;rios, e outros como: r&aacute;dio, cd player, n&atilde;o s&atilde;o cobertos por nenhuma prote&ccedil;&atilde;o dispon&iacute;vel para contrata&ccedil;&atilde;o, devendo o LOCAT&Aacute;RIO repor(com a devida autoriza&ccedil;&atilde;o da LOCADORA)ou reembolsar o valor do mesmo. Tamb&eacute;m n&atilde;o est&atilde;o cobertos quebras ou trincas de vidros, ser&atilde;o cobrados todos e quaisquer avarias por mal uso, como exemplo: pneus cortados, pneus furados e rasgos ou furos em estofamentos, amassados, arranh&otilde;es e demais assim por diante.</p>
        <p style="text-align: justify;">5.2.3 O LOCAT&Aacute;RIO concorda que se o VE&Iacute;CULO for devolvido com sujeira excessiva, ou manchas decorrentes de utiliza&ccedil;&atilde;o indevida e/ou abusiva, o LOCAT&Aacute;RIO fica sujeito &agrave; cobran&ccedil;a de taxa de lavagem especial e, se aplic&aacute;vel, taxa de higieniza&ccedil;&atilde;o que ser&aacute; cobrada do LOCAT&Aacute;RIO.</p>
        <p style="text-align: justify;">5.3 Comunicar imediatamente &agrave; LOCADORA qualquer anormalidade operacional constatada no ve&iacute;culo assim como necessidades de reparos visando, sobretudo, prevenir quebras e/ou acidentes.</p>
        <p style="text-align: justify;">5.4 Conduzir o ve&iacute;culo em estrita obedi&ecirc;ncia &agrave;s leis de tr&acirc;nsito, jamais utilizando-o em testes de velocidade ou competi&ccedil;&otilde;es, para puxar ou empurrar outro ve&iacute;culo, para transporte de inflam&aacute;veis ou explosivos, para fins il&iacute;citos ou para quaisquer fins incompat&iacute;veis com suas caracter&iacute;sticas.</p>
        <p style="text-align: justify;">5.5 Em caso de acidente colher dados e informa&ccedil;&otilde;es referentes aos ve&iacute;culos envolvidos tais como: identifica&ccedil;&atilde;o de condutores, coberturas por seguro, identifica&ccedil;&atilde;o de v&iacute;timas e testemunhas, diligenciando no sentido da obten&ccedil;&atilde;o do competente registro policial e obten&ccedil;&atilde;o do Boletim de Ocorr&ecirc;ncia dando, imediata ci&ecirc;ncia do ocorrido &agrave; LOCADORA, com entrega da documenta&ccedil;&atilde;o acima referida &ndash; dentro do prazo m&aacute;ximo de 48 horas &ndash; sob pena de responder, pelos preju&iacute;zos decorrentes, ou seja danos materiais, morais e lucros cessantes.</p>
        <p style="text-align: justify;">5.6 Usar de toda cautela no sentido de minimizar as possibilidades de danos, furto ou roubo, n&atilde;o deixando o ve&iacute;culo em lugares ermos ou perigosos, nem transferindo sua posse a terceiros.</p>
        <p style="text-align: justify;">5.7 Manter o ve&iacute;culo em bom estado de conserva&ccedil;&atilde;o cumprindo, nos prazos, as especifica&ccedil;&otilde;es do fabricante no tocante &agrave; manuten&ccedil;&atilde;o e &agrave;s revis&otilde;es.</p>
        <p style="text-align: justify;">5.8. Responsabilizar-se integralmente&nbsp; pelo motorista por ele nomeado ou indicado no contrato de loca&ccedil;&atilde;o e, em havendo a substitui&ccedil;&atilde;o do mesmo, esta dever&aacute; ser informado por escrito &agrave; LOCADORA, do qual ser&aacute; exigida a habilita&ccedil;&atilde;o legal espec&iacute;fica para a condu&ccedil;&atilde;o do ve&iacute;culo emitida h&aacute; pelo menos dois anos, n&atilde;o podendo, neste caso, ser menor de vinte e um anos, obrigando-se o LOCAT&Aacute;RIO a impor a estes a observ&acirc;ncia rigorosa das cautelas adequadas e o respeito &agrave;s leis e regulamentos de tr&acirc;nsito do pa&iacute;s.</p>
        <ol style="text-align: justify;" start="6">
        <li><strong> DO PAGAMENTO </strong></li>
        </ol>
        <p style="text-align: justify;">6.1 LOCAT&Aacute;RIO se compromete a pagar pontualmente o montante devido, ficando a LOCADORA, desde j&aacute; autorizada a emitir e sacar em nome do LOCAT&Aacute;RIO t&iacute;tulos de cr&eacute;dito, com impl&iacute;cito aceite. Fica ainda LOCADORA <u>expressamente autorizada a se creditar, atrav&eacute;s de sistem&aacute;tica aplic&aacute;vel a Cart&otilde;es de Cr&eacute;dito assinaturas em arquivo das import&acirc;ncias devidas, &agrave; vista pelo LOCAT&Aacute;RIO</u>.</p>
        <p style="text-align: justify;">6.2 O LOCAT&Aacute;RIO declara estar, de forma clara e inequ&iacute;voca, ciente de sua responsabiliza&ccedil;&atilde;o por infra&ccedil;&otilde;es de tr&acirc;nsito cometidas na condu&ccedil;&atilde;o do ve&iacute;culo, assim como pelo pagamento integral de eventuais multas de tr&acirc;nsito impostas durante o per&iacute;odo de loca&ccedil;&atilde;o.</p>
        <p style="text-align: justify;">6.2.1 A LOCADORA se reserva o direito de &ndash; recebida a notifica&ccedil;&atilde;o da infra&ccedil;&atilde;o de tr&acirc;nsito e respectiva multa &ndash; indicar o LOCAT&Aacute;RIO como condutor do ve&iacute;culo, juntando, para conhecimento das autoridades de tr&acirc;nsito, c&oacute;pia deste instrumento particular de contrato e dos documentos de habilita&ccedil;&atilde;o e identidade do locat&aacute;rio.</p>
        <p style="text-align: justify;">6.2.2 O LOCAT&Aacute;RIO, desde j&aacute;, autoriza que o pagamento de eventuais multas de sua responsabilidade ou qualquer outro valor previsto no presente instrumento, acrescidos de <u>20%</u> (VINTE POR CENTO) a t&iacute;tulo de custos, poder&aacute; ser cobrado/debitado diretamente pela LOCADORA, para imediato ressarcimento, inclusive atrav&eacute;s de sistema aplic&aacute;vel a Cart&otilde;es de Cr&eacute;dito desde que previamente comunicado os respectivos valores. As condi&ccedil;&otilde;es desta cl&aacute;usula aplicam-se exclusivamente, os Cart&otilde;es de Cr&eacute;dito vinculados e especificados no &ldquo;Demonstrativo de Aluguel de Ve&iacute;culo&rdquo;. A referida autoriza&ccedil;&atilde;o de d&eacute;bito em Cart&atilde;o de Cr&eacute;dito ter&aacute; validade de um ano, contado da data do encerramento da loca&ccedil;&atilde;o, ap&oacute;s a qual n&atilde;o mais ser&aacute; permitido &agrave; LOCADORA efetuar d&eacute;bitos, a qualquer t&iacute;tulo, nos cart&otilde;es de cr&eacute;ditos vinculados ao presente contrato.</p>
        <p style="text-align: justify;">6.2.3 O LOCAT&Aacute;RIO aceita e tem pleno conhecimento que, por ocasi&atilde;o da loca&ccedil;&atilde;o, a LOCADORA poder&aacute; solicitar a administradora de seu cart&atilde;o de cr&eacute;dito uma pr&eacute;-autoriza&ccedil;&atilde;o de d&eacute;bito no valor m&iacute;nimo de R$ 1.000,00 (mil reais), ficando acordado que esse valor apenas ser&aacute; efetivamente cobrado em caso de inadimpl&ecirc;ncia do LOCAT&Aacute;RIO em rela&ccedil;&atilde;o ao pagamento da loca&ccedil;&atilde;o e demais taxas, despesas e reembolsos definidos neste instrumento.</p>
        <p style="text-align: justify;">6.2.4 A referida autoriza&ccedil;&atilde;o de d&eacute;bito ter&aacute; validade pelo prazo de um ano, ap&oacute;s o qual n&atilde;o mais ser&aacute; poss&iacute;vel que a LOCADORA efetue d&eacute;bitos a qualquer t&iacute;tulo no cart&atilde;o de cr&eacute;dito do LOCAT&Aacute;RIO.</p>
        <p style="text-align: justify;">6.2.5 A LOCADORA poder&aacute; aceitar terceiro como FIADOR e, solicitar a administradora de seu cart&atilde;o de cr&eacute;dito uma pr&eacute;-autoriza&ccedil;&atilde;o de d&eacute;bito nas mesmas condi&ccedil;&otilde;es da Cl&aacute;usula 6.2.3.</p>
        <p style="text-align: justify;">6.2.6 O cancelamento da pr&eacute;-autoriza&ccedil;&atilde;o somente ocorrer&aacute; com pr&eacute;vio consentimento da LOCADORA e, se o LOCAT&Aacute;RIO ou FIADOR o fizer sem justo motivo, responder&aacute; pelo crime de estelionato nos termos do artigo 171 do C&oacute;digo Penal, sem, contudo, deixar de pagar por poss&iacute;veis danos materiais e morais causados a LOCADORA.</p>
        <p style="text-align: justify;">6.3 Fica garantido, a qualquer tempo, o direito de regresso da LOCADORA contra o LOCAT&Aacute;RIO na hip&oacute;tese de cobran&ccedil;as de valores de indeniza&ccedil;&otilde;es decorrentes de danos causados durante a vig&ecirc;ncia do presente contrato, inclusive multa por infra&ccedil;&otilde;es cometidas na condu&ccedil;&atilde;o do ve&iacute;culo.</p>
        <p style="text-align: justify;">6.4 O LOCAT&Aacute;RIO reconhece expressamente, como l&iacute;quido, certo e exig&iacute;vel, o montante apurado no &ldquo;Demonstrativo de Aluguel de Ve&iacute;culo&rdquo; constituindo-se, portanto, t&iacute;tulo executivo extrajudicial ensejando, sua cobran&ccedil;a imediata, atrav&eacute;s de execu&ccedil;&atilde;o por quantia certa, na hip&oacute;tese de n&atilde;o pagamento nos prazos estabelecidos, independentemente de qualquer aviso, notifica&ccedil;&atilde;o ou protesto judicial ou extrajudicial.</p>
        <p style="text-align: justify;">6.5 O LOCAT&Aacute;RIO reconhece e aceita o presente podendo a LOCADORA emitir,a seu crit&eacute;rio exclusivo,a respectiva fatura e duplicata correspondente ao montante deste contrato. Nesta hip&oacute;tese, independentemente de qualquer outra medida judicial ou extrajudicial, o LOCAT&Aacute;RIO declara, reconhece e aceita o presente contrato como comprovante da efetiva presta&ccedil;&atilde;o de servi&ccedil;os e acr&eacute;scimos para todos os fins de direito restando, assim, legitimada sua cobran&ccedil;a executiva ou, em se tratando de pessoa jur&iacute;dica, o requerimento de fal&ecirc;ncia.</p>
        <p style="text-align: justify;"><strong>6.6 DA N&Atilde;O DEVOLU&Ccedil;&Atilde;O DO VE&Iacute;CULO</strong></p>
        <p style="text-align: justify;">6.6.1 N&atilde;o devolvendo o ve&iacute;culo, quando terminada ou rescindida a loca&ccedil;&atilde;o, estar&aacute; o LOCAT&Aacute;RIO obrigado a pagar, at&eacute; a data da efetiva restitui&ccedil;&atilde;o do ve&iacute;culo,a tarifa di&aacute;ria praticada no balc&atilde;o da LOCADORA, acrescida da cobertura de seguro e da tarifa original deste contrato, em fun&ccedil;&atilde;o do respectivo prazo, seja semanal, mensal ou especial.</p>
        <p style="text-align: justify;">6.6.2 Caso a LOCADORA necessite buscar o ve&iacute;culo em local diverso do estabelecimento para sua devolu&ccedil;&atilde;o, estar&aacute; o LOCAT&Aacute;RIO obrigado ao</p>
        <p style="text-align: justify;">pagamento mencionado na cl&aacute;usula anterior, correndo por sua conta toda e qualquer despesa decorrente de tal fato, inclusive judiciais, correspondente &agrave; eventual libera&ccedil;&atilde;o ao transporte, estadia, sal&aacute;rio e encargos de condutor, combust&iacute;veis, seguros, fretes e outras.</p>
        <ol style="text-align: justify;" start="7">
        <li><strong> DANOS GERADOS POR SINISTROS DIVERSOS, MAU USO, COLIS&Atilde;O, FURTO, ROUBO, INC&Ecirc;NDIO OU PERDA TOTAL.</strong></li>
        </ol>
        <p style="text-align: justify;">7.1. Em caso de furto, roubo ou perda total, danos ao carro a terceiros, fica estabelecido os valores de <strong>franquia</strong> e cobertura expressos em campo espec&iacute;fico do Demonstrativo de Aluguel de Ve&iacute;culos, declarando o LOCAT&Aacute;RIO o pleno conhecimento e aceita&ccedil;&atilde;o.</p>
        <p style="text-align: justify;">7.1.1 Na hip&oacute;tese de indeniza&ccedil;&otilde;es superiores ao valor da cobertura a diferen&ccedil;a caber&aacute; exclusivamente ao LOCAT&Aacute;RIO. As coberturas contratadas somente ser&atilde;o v&aacute;lidas mediante o integral cumprimento pelo LOCAT&Aacute;RIO de todas as obriga&ccedil;&otilde;es especificadas no presente instrumento.</p><br><br>
        <p style="text-align: justify;"><strong>7.1.2 TABELA DE INDENIZA&Ccedil;&Otilde;ES: FRANQUIA SER PAGO PELO LOCAT&Aacute;RIO EM CASO DE: </strong></p>
        <p style="text-align: justify;">&nbsp;</p>
        <table>
            <thead>
              <tr style="background-color: #f2f2f2;">
                <th style="border: 1px solid black; padding: 2px; text-align: left;">Descrição</th>
                <th style="border: 1px solid black; padding: 2px; text-align: left;">Cobertura</th>
              </tr>
            </thead>
            <tbody>
              <tr style="background-color: #f9f9f9;">
                <td style="border: 1px solid black; padding: 2px; text-align: left;">Danos a terceiros</td>
                <td style="border: 1px solid black; padding: 2px; text-align: left;">R$1.000,00</td>
              </tr>
              <tr>
                <td style="border: 1px solid black; padding: 2px; text-align: left;">Danos ao Carro</td>
                <td style="border: 1px solid black; padding: 2px; text-align: left;">10% Tabela Fipe</td>
              </tr>
              <tr style="background-color: #f9f9f9;">
                <td style="border: 1px solid black; padding: 2px; text-align: left;">Danos Perda Total/Furto/Roubo</td>
                <td style="border: 1px solid black; padding: 2px; text-align: left;">15% Tabela Fipe</td>
              </tr>
              <tr>
                <td style="border: 1px solid black; padding: 2px; text-align: left;">Para Choque (Quando houver recuperação)</td>
                <td style="border: 1px solid black; padding: 2px; text-align: left;">R$ 300,00</td>
              </tr>
              <tr style="background-color: #f9f9f9;">
                <td style="border: 1px solid black; padding: 2px; text-align: left;">Lataria (Quando houver recuperação)</td>
                <td style="border: 1px solid black; padding: 2px; text-align: left;">R$ 380,00</td>
              </tr>
              <tr>
                <td style="border: 1px solid black; padding: 2px; text-align: left;">Faróis/Para-brisa</td>
                <td style="border: 1px solid black; padding: 2px; text-align: left;">Preço Concessionária + 20% Taxa Administrativa</td>
              </tr>
            </tbody>
          </table>
            
        <p style="text-align: justify;">7.2 As garantias a que se refere a cl&aacute;usula anterior ser&atilde;o automaticamente revogadas, sendo, pois, inopon&iacute;veis &agrave; LOCADORA ou terceiros na hip&oacute;tese de o LOCAT&Aacute;RIO infringir as cl&aacute;usulas 2.2, 5.4, 5.6, 5.7, 5.8.</p>
        <p style="text-align: justify;">7.3 Ainda na hip&oacute;tese de sinistro, ficar&aacute; o LOCAT&Aacute;RIO obrigado a indenizar a LOCADORA pelos equipamentos e acess&oacute;rios existentes no ve&iacute;culo e n&atilde;o coberto pelo seguro, conforme cl&aacute;usula 5.22.&nbsp;</p>
        <p style="text-align: justify;">7.4 Fica ainda estabelecido que exclu&iacute;da a cobertura do seguro por culpa do LOCAT&Aacute;RIO, ficar&aacute; ele obrigado a indenizar a LOCADORA, n&atilde;o s&oacute; pelos danos causados ao ve&iacute;culo, como tamb&eacute;m pelos lucros cessantes, calculados com base na tarifa aplicada ao presente contrato.</p>
        <p style="text-align: justify;">7.5. Em caso de avaria por mau uso ou sinistro, ser&aacute; da responsabilidade do LOCAT&Aacute;RIO o pagamento de indeniza&ccedil;&atilde;o pelos lucros cessantes &agrave; LOCADORA a que se refere a clausula 7.1, calculados estes com base em 100% (cem por cento) da di&aacute;ria vigente na ocasi&atilde;o do evento e at&eacute; a entrega do boletim de ocorr&ecirc;ncia policial, acrescido do per&iacute;odo efetivamente necess&aacute;rio para o reparo do ve&iacute;culo ou para recebimento do seu valor.</p>
        <p style="text-align: justify;">7.6 Ser&aacute; de responsabilidade do LOCAT&Aacute;RIO o pagamento a t&iacute;tulo de indeniza&ccedil;&atilde;o de: responsabilidade total sobre roubos parciais, acess&oacute;rios, danos causados por mau uso, pneus, estofamentos, vidros, far&oacute;is, lanternas, etc.</p>
        <ol style="text-align: justify;" start="8">
        <li><strong> REPAROS, CONSERTOS E REPOSI&Ccedil;&Otilde;ES:</strong></li>
        </ol>
        <p style="text-align: justify;">8.1. Na hip&oacute;tese de devolu&ccedil;&atilde;o ou retomada do ve&iacute;culo, sem preju&iacute;zo do constante das cl&aacute;usulas 7.1 a 7.4 supra, ao LOCAT&Aacute;RIO cumprir&aacute;, reembolsar &agrave; LOCADORA pelos reparos ou consertos necess&aacute;rios para reparar o VE&Iacute;CULO deixando-o em perfeito estado de funcionamento e conserva&ccedil;&atilde;o em que o recebeu e obrigou-se a devolv&ecirc;-lo, sem direito a reten&ccedil;&atilde;o ou indeniza&ccedil;&atilde;o, a qualquer t&iacute;tulo, em virtude das benfeitorias realizadas no ve&iacute;culo. Cabe a LOCADORA determinar aonde ser&aacute; realizado o reparo, <u><strong>n&atilde;o </strong></u>sendo autorizado ao LOCAT&Aacute;RIO providenciar.</p>
        <p style="text-align: justify;">8.2. Descumprindo o disposto na cl&aacute;usula anterior, fica a LOCADORA desde j&aacute; autorizada, expressamente, a contratar os servi&ccedil;os necess&aacute;rios aos reparos ou consertos do ve&iacute;culo por conta exclusiva do LOCAT&Aacute;RIO, em empresas concession&aacute;rias autorizadas do fabricante do ve&iacute;culo de sua escolha, responsabilizando-se o LOCAT&Aacute;RIO pelo imediato reembolso do montante correspondente.</p>
        <p style="text-align: justify;">8.3 Se ap&oacute;s vencido o prazo contratual, o ve&iacute;culo, por decorr&ecirc;ncia de danos, n&atilde;o reunir condi&ccedil;&otilde;es de utiliza&ccedil;&atilde;o, ficar&aacute; o LOCAT&Aacute;RIO, ainda neste caso, sujeito aos efeitos do disposto na cl&aacute;usula 6.6.1 at&eacute; o momento em que o ve&iacute;culo voltar a estar em condi&ccedil;&otilde;es de ser utilizado.</p>
        <p style="text-align: justify;"><strong>9.DA LOCA&Ccedil;&Atilde;O PARA EMPRESAS E AG&Ecirc;NCIAS DE VIAGENS</strong></p>
        <p style="text-align: justify;">9.1 O LOCAT&Aacute;RIO estar&aacute; sempre qualificado no &ldquo;Demonstrativo de Aluguel de Ve&iacute;culo&rdquo; e mesmo nos casos das ag&ecirc;ncias de viagens, caber&aacute; a mesma responsabilidade integral pelas condi&ccedil;&otilde;es contratuais, independente do usu&aacute;rio do ve&iacute;culo que, neste caso, ser&aacute; apenas identificado como condutor do ve&iacute;culo.</p>
        <ol style="text-align: justify;" start="10">
        <li><strong> SUBLOCA&Ccedil;&Atilde;O E CESS&Atilde;O</strong></li>
        </ol>
        <p style="text-align: justify;">10.1 O ve&iacute;culo locado n&atilde;o poder&aacute;, sem pr&eacute;via e expressa autoriza&ccedil;&atilde;o da LOCADORA, ser sublocado, emprestado ou cedido, a qualquer t&iacute;tulo, a quem quer que seja; vedada ainda a cess&atilde;o de direitos concernentes ao presente contrato por parte do LOCAT&Aacute;RIO.</p>
        <ol style="text-align: justify;" start="11">
        <li><strong> DA RESPONSABILIDADE DO LOCAT&Aacute;RIO</strong></li>
        </ol>
        <p style="text-align: justify;">11.1 O LOCAT&Aacute;RIO assume, integral e isoladamente, toda a responsabilidade civil e criminal decorrente do uso do ve&iacute;culo locado, inclusive por danos causados a terceiros. No caso de a LOCADORA vir a ser citada para, em qualquer condi&ccedil;&atilde;o, fazer parte de processo judicial ou de qualquer natureza, compromete-se o LOCAT&Aacute;RIO a reembolsar-lhe, corrigidas, todas as despesas judiciais ou extrajudiciais, inclusive honor&aacute;rios de advogados, desde j&aacute; aven&ccedil;ados em 20%.</p>
        <p style="text-align: justify;">11.2 O LOCAT&Aacute;RIO concorda e reconhece que a sua assinatura no CONTRATO DE LOCA&Ccedil;&Atilde;O implica na ci&ecirc;ncia e consentimento e reconhece por si, seus herdeiros e/ou sucessores a qualquer t&iacute;tulo de todas as cl&aacute;usulas, termos e condi&ccedil;&otilde;es do presente CONTRATO DE LOCA&Ccedil;&Atilde;O, a que teve amplo acesso, conhecimento e esclarecimento.</p>
        <p style="text-align: justify;">11.3. Eventual omiss&atilde;o ou atraso de qualquer das partes em exigir o cumprimento e qualquer termo ou condi&ccedil;&atilde;o do CONTRATO DE LOCA&Ccedil;&Atilde;O pela outra parte, ou em exercer qualquer direito, prerrogativa ou recurso aqui previsto, n&atilde;o constituir&aacute; nova&ccedil;&atilde;o nem ren&uacute;ncia da possibilidade futura de exigir o cumprimento de tal termo, condi&ccedil;&atilde;o, direito, prerrogativa ou recurso.</p>
        <p style="text-align: justify;">11.4 O CONTRATO DE LOCA&Ccedil;&Atilde;O n&atilde;o poder&aacute; ser transferido ou cedido, total ou parcialmente, por qualquer das partes para qualquer terceiro, seja a que t&iacute;tulo for.</p>
        <p style="text-align: justify;"><strong>12.DA RESCIS&Atilde;O</strong></p>
        <p style="text-align: justify;">12.1. Dar-se-&aacute; por rescindido o presente contrato de loca&ccedil;&atilde;o, de pleno direito, independentemente de qualquer notifica&ccedil;&atilde;o, judicial, ou extrajudicial, se o LOCAT&Aacute;RIO deixar de pagar no vencimento o aluguel e acr&eacute;scimos, ou ainda, n&atilde;o der cumprimento a qualquer das cl&aacute;usulas e condi&ccedil;&otilde;es neste contrato de loca&ccedil;&atilde;o e/ou em aditivo(s). Da mesma forma, rescindir-se-&aacute; o contrato de loca&ccedil;&atilde;o na hip&oacute;tese de fal&ecirc;ncia, concordata ou insolv&ecirc;ncia do LOCAT&Aacute;RIO, caracterizando-se esta &uacute;ltima, no caso de pessoa f&iacute;sica e a ju&iacute;zo da LOCADORA, com o aparelhamento de execu&ccedil;&otilde;es ou efetiva&ccedil;&atilde;o de protesto de t&iacute;tulos.</p>
        <p style="text-align: justify;">12.2 O LOCAT&Aacute;RIO poder&aacute; rescindir a qualquer tempo o presente contrato de loca&ccedil;&atilde;o, mediante simples notifica&ccedil;&atilde;o escrita ou devolu&ccedil;&atilde;o do ve&iacute;culo, aplicando-se, no que couberem, as cl&aacute;usulas previstas neste contrato de loca&ccedil;&atilde;o e sem preju&iacute;zo dos acertos financeiros pendentes. No caso de notifica&ccedil;&atilde;o escrita o(s) ve&iacute;culo(s) dever&aacute;(&atilde;o) ser devolvido(s) &agrave; LOCADORA no prazo fixado pela mesma, sob pena de configura&ccedil;&atilde;o de apropria&ccedil;&atilde;o ind&eacute;bita.</p>
        <ol style="text-align: justify;" start="13">
        <li><strong> DO FORO</strong></li>
        </ol>
        <p style="text-align: justify;">13.1 Fica eleito o foro da Cidade de Serra/ES para dirimir quaisquer quest&otilde;es, resultantes deste contrato de loca&ccedil;&atilde;o, sem preju&iacute;zo da faculdade da LOCADORA, aqui institu&iacute;da, de optar pelo foro do domic&iacute;lio de qualquer das partes contratantes.</p>
        <ol style="text-align: justify;" start="14">
        <li><strong> DISPOSI&Ccedil;&Otilde;ES FINAIS</strong></li>
        </ol>
        <p style="text-align: justify;">14.1 O LOCAT&Aacute;RIO se torna respons&aacute;vel, civil e criminalmente, pelas declara&ccedil;&otilde;es prestadas no ato da assinatura do contrato de loca&ccedil;&atilde;o e aditivo(s) e pela autenticidade dos documentos necess&aacute;rios para celebra&ccedil;&atilde;o do mesmo, inclusive c&oacute;pias dos documentos pessoais de todos os condutores.</p>
<div><p class="parag"><b>DEMAIS OBSERVAÇÕES:</b> {{$locacao->obs}}</p></div>
</div><br><br>

        <div style="text-align: center; font-size: 12">SERRA - ES, {{ $dataAtual->isoFormat('DD MMMM YYYY') }}<br><br><br><br>

            ___________________________________________________________<br>
            LOCATÁRIO: {{$locacao->Cliente->nome}}<br><br><br><br>

            ___________________________________________________________<br>
            LOCADOR: MCK LOCADORA.              

        </div>
        <br><br>
        <div>
            Testemunhas:<br><br>
            Nome:___________________________<br>
            CPF:____________________________<br><br><br>




            Nome:___________________________<br>
            CPF:____________________________<br>
        </div>











</body>
</html>
