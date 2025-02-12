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
    <td><img src="{{ asset('img/logo.png') }}" alt="Image" height="80" width="200"></td>
    <td> <p style="width: 100%; font-size:28px; font-weight: bold;" align="center">EXPRESSO RENT A CAR</p>
         <p style="font-size:16px;" align="center">CNPJ: 43.677.555/0001-85,<br>
                                                 E-mail: expressorentcar@gmail.com, Telefone  (11) 91441-7707,<br>
                                                 Rua Masuzo Naniwa, 105, CEP 8773535, no bairro Vila Mogilar,
                                                  <br>Mogi das Cruzes - SP</p>
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

<div class="container">
    <div class="tela">
        <table>
            <tr>
                <td>
                    <h3>Inspeção de Veículo</h3>
                    <tr>
                        <td>( ) Documento</td>
                    </tr>
                    <tr>
                        <td>( ) Calota</td>
                    </tr>
                    <tr>
                        <td>( ) Macaco</td>
                    </tr>
                    <tr>
                        <td>( ) Estepe</td>
                    </tr>
                    <tr>
                        <td>( ) Trava</td>
                    </tr>
                    <tr>
                        <td>( ) Triângulo</td>
                    </tr>
                    <tr>
                        <td>( ) Tapetes</td>
                    </tr>
                    <tr>
                        <td>( ) Ar Condicionado</td>
                    </tr>
                    <tr>
                        <td>( ) Som</td>
                    </tr>
                    <tr>
                        <td>( ) Retrovisores</td>
                    </tr>
                    <tr>
                        <td>( ) Antena</td>
                    </tr>
                    
                </td>
            </tr>
        </table>

    </div>
</div>
<div style="margin-left: 300px">
    <table style="width: 100%">
        <tr>
            <td><p style="margin-left: 90px">Mogi das Cruzes - SP, {{ $dataAtual->isoFormat('DD MMMM YYYY') }}</p></td>
        </tr>
        <br><br><br>
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
        <td><img src="{{ asset('img/logo.png') }}" alt="Image" height="80" width="200"></td>
      <td> <p style="width: 100%; font-size:20px; font-weight: bold" align="center">Contrato de Locação de Veículos</p>

      </td>
  </tr>
  </table>
</div>
<div>
    <div>
        
        <p style="text-align: justify;">Pelo presente instrumento, de um lado, EXPRESSO RENT A CAR ME, sob nome fantasia EXPRESSO RENT A CAR pessoa jur&iacute;dica de direito privado, inscrita&nbsp; sob no CNPJ 43.677.555.0001/85, com sede na Av. Nilo Marcatto, n.1673, Mogi das Cruzes, SP, CEP: 08830-010, neste ato representado por seu administrador, o Sr&deg; HENRIQUE PONTES, brasileiro, casado, empres&aacute;rio, portador da c&eacute;dula de identidade de n&deg; 32.622.258-3 SSP/SP,CPF: 057.412.927-80, doravante denominado de LOCADOR, e de outro lado, {{$locacao->Cliente->nome}}, portador da c&eacute;dula de identidade n&deg; {{$locacao->Cliente->rg}} - {{$locacao->Cliente->exp_rg}}, inscrito no CPF {{$cpfCnpj}} , endere&ccedil;o; {{$locacao->Cliente->endereco}}; - {{$locacao->Cliente->Cidade->nome}} - {{$locacao->Cliente->Estado->nome}}, abaixo assinado(s), doravante denominada LOCAT&Aacute;RIO, resolvem firmar o presente CONTRATO DE LOCA&Ccedil;&Atilde;O DE AUTOM&Oacute;VEL, o que fazem nos termos que seguem.</p>
<p style="text-align: justify;">&nbsp;<strong>CL&Aacute;USULA PRIMEIRA - DO OBJETO</strong>.</p>
<p style="text-align: justify;">1.1 O objeto do presente contrato &eacute; a loca&ccedil;&atilde;o de 01 (um) carro, conforme anexo autom&oacute;vel {{$locacao->Veiculo->Marca->nome}}/{{$locacao->Veiculo->modelo}}, cor {{$locacao->Veiculo->cor}} ano de fabrica&ccedil;&atilde;o {{$locacao->Veiculo->ano}}, placa {{$locacao->Veiculo->placa}}, RENAVAM {{$locacao->Veiculo->renavam}}, CHASSI n&ordm; {{$locacao->Veiculo->chassi}}, combust&iacute;vel FLEX, sem motorista.</p>
<p style="text-align: justify;">1.2. O ve&iacute;culo locado se encontram em regular funcionamento, em conformidade com vistoria assinada pelas partes, conforme anexo (Check List).</p>
<p style="text-align: justify;"><strong>CL&Aacute;USULA SEGUNDA - DO VALOR DA LOCA&Ccedil;&Atilde;O</strong>.</p>
<p style="text-align: justify;">2.1. Em contrapresta&ccedil;&atilde;o a tudo o quanto disposto neste contrato, o LOCAT&Aacute;RIO pagar&aacute; o valor total de R$ {{$locacao->valor_total_desconto}}.</p>
<p style="text-align: justify;">2.2. Fica estipulado a quantidade de 5000 (cinco mil) KM por m&ecirc;s, ser&aacute; cobrado 0,63 centavos por Km rodado a mais da quantidade de 5000 (cinco mil) KM.</p>
<p style="text-align: justify;">2.3. O atraso no pagamento ensejar&aacute; a incid&ecirc;ncia de multa morat&oacute;ria de 2% (dois por cento) sobre o valor devido, al&eacute;m de juros 1% (um por cento) ao m&ecirc;s.</p>
<p style="text-align: justify;">2.4 O pagamento poder&aacute; ser feito por transfer&ecirc;ncia ou boleto banc&aacute;rio pelo LOCAT&Aacute;RIO, ap&oacute;s a emiss&atilde;o das respectivas faturas pelo LOCADOR.</p>
<p style="text-align: justify;">2.5. N&atilde;o ser&aacute; permitido desconto em banco ou organiza&ccedil;&atilde;o financeira, de t&iacute;tulos correspondentes &agrave; cobran&ccedil;a de fornecimentos ou servi&ccedil;os, prestados &agrave; CONTRATANTE.</p>
<p style="text-align: justify;">2.6. Eventuais servi&ccedil;os adicionais que n&atilde;o estiverem inclu&iacute;dos no Item 1.1 do presente contrato dever&aacute; ser negociado &agrave; parte, mediante a celebra&ccedil;&atilde;o do instrumento correspondente.</p>
<p style="text-align: justify;"><strong>CL&Aacute;USULA TERCEIRA - OBRIGA&Ccedil;&Otilde;ES DO LOCADOR</strong></p>
<p style="text-align: justify;">3.1 O LOCADOR &eacute; obrigado a:</p>
<p style="text-align: justify;">a). Fornece toda a documenta&ccedil;&atilde;o necess&aacute;ria para que o ve&iacute;culo possa trafegar em conformidade com a legisla&ccedil;&atilde;o, em especial documenta&ccedil;&atilde;o de seguro obrigat&oacute;rio e comprovante de pagamento do IPVA do ano em curso;</p>
<p style="text-align: justify;">b). Substituir o autom&oacute;vel caso seja constatado algum problema t&eacute;cnico-mec&acirc;nico no prazo de 24 horas, de forma que o ve&iacute;culo esteja sempre &agrave; disposi&ccedil;&atilde;o do LOCAT&Aacute;RIO, em perfeito estado de funcionamento, durante todo o per&iacute;odo do contrato de loca&ccedil;&atilde;o.</p>
<ol style="text-align: justify;">
<li>c) Firmar todos os documentos que se fizerem necess&aacute;rios, mediante requerimento do LOCAT&Aacute;RIO, em conson&acirc;ncia com a legisla&ccedil;&atilde;o.</li>
<li>d) O LOCAT&Aacute;RIO fica respons&aacute;vel pelo valor da franquia em caso de colis&atilde;o, furto ou roubo, onde estar&aacute; discriminado no anexo I (valor da franquia), contratado pelo LOCADOR. O seguro para terceiros estar&aacute; limitado no valor de R$ 3.000,00 (tr&ecirc;s mil reais), passando desse valor ser&aacute; de responsabilidade do locat&aacute;rio.</li>
</ol>
<p style="text-align: justify;">e). Contratar e manter em vigor ap&oacute;lice de seguro para o caso de acidentes com os ve&iacute;culos, nas bases e nas condi&ccedil;&otilde;es exigidas pela legisla&ccedil;&atilde;o aplic&aacute;vel, acobertando os usu&aacute;rios durante o trajeto da viagem, prevendo, inclusive, indeniza&ccedil;&atilde;o de danos morais e materiais eventualmente por eles suportados em caso de acidente ou de qualquer outro sinistro;</p>
<ol style="text-align: justify;">
<li>f) Responder e indenizar a CONTRATANTE, terceiros (sejam eles pessoas f&iacute;sicas ou jur&iacute;dicas, de direito p&uacute;blico ou privado) ou o meio ambiente, por quaisquer danos ou preju&iacute;zos comprovadamente causados em virtude de ato ou omiss&atilde;o, erro, falha, imprud&ecirc;ncia, neglig&ecirc;ncia ou imper&iacute;cia, cometidos por si ou pelas pessoas que est&atilde;o sob a sua responsabilidade;</li>
<li>g) No caso da ocorr&ecirc;ncia de sinistros (tais como acidentes) obriga-se a tomar, de imediato, todas as provid&ecirc;ncias necess&aacute;rias &agrave; satisfa&ccedil;&atilde;o das exig&ecirc;ncias legais e da seguradora, com vistas a possibilitar o ressarcimento dos preju&iacute;zos verificados, bem como a avisar por escrito e&nbsp;&nbsp;&nbsp; "incontinenti" a CONTRATANTE;</li>
</ol>
<p style="text-align: justify;">h). Manter em dia as obriga&ccedil;&otilde;es &agrave;s quais se sujeita por for&ccedil;a da presta&ccedil;&atilde;o dos servi&ccedil;os ora contratados, nos termos da lei e das normas regulamentares aplic&aacute;veis; responsabilizar-se pelo pagamento de todos os tributos (impostos, taxas e contribui&ccedil;&otilde;es, inclusive as de car&aacute;ter previdenci&aacute;rio) a que estiver sujeita em decorr&ecirc;ncia dos servi&ccedil;os por ela prestados</p>
<p style="text-align: justify;">i). Responsabilizar-se por todos e quaisquer encargos incidentes e/ou resultantes da execu&ccedil;&atilde;o dos servi&ccedil;os contratados, bem como pelos encargos trabalhistas, previdenci&aacute;rios, fundi&aacute;rios e securit&aacute;rios de seus funcion&aacute;rios e/ou prepostos empregados na execu&ccedil;&atilde;o dos servi&ccedil;os;</p>
<ol style="text-align: justify;">
<li>j) Reembolsar a LOCAT&Aacute;RIA toda e qualquer quantia por ela despendida, por determina&ccedil;&atilde;o judicial, em face de reclama&ccedil;&otilde;es trabalhistas e/ou previdenci&aacute;rias movidas por qualquer dos seus empregados e/ou prepostos, envolvidos, direta ou indiretamente, na execu&ccedil;&atilde;o dos servi&ccedil;os objeto deste contrato.</li>
</ol>
<p style="text-align: left;">&nbsp;<strong>CL&Aacute;USULA QUARTA - OBRIGA&Ccedil;&Otilde;ES DO LOCAT&Aacute;RIO O LOCAT&Aacute;RIO &eacute; obrigado a: </strong></p>
<ol style="text-align: justify;">
<li>a) utilizar o ve&iacute;culo unicamente para os fins a que se destina, podendo o LOCADOR recusar-se a utilizar o ve&iacute;culo para fins diversos daqueles contratualmente estabelecidos, ou a trafegar em beira de praia ou estradas intransit&aacute;veis.</li>
<li>b) providenciar motorista que conduza o ve&iacute;culo, com habilita&ccedil;&atilde;o regular para conduzi-lo, assim como responder por todos os direitos deste condutor, de qualquer natureza, n&atilde;o apresentando o LOCADOR qualquer responsabilidade sobre o mesmo;</li>
<li>c) responder por quaisquer danos que venham a ser causados ao ve&iacute;culo (avarias), durante o per&iacute;odo de loca&ccedil;&atilde;o, inclusive em decorr&ecirc;ncia de furto, roubo ou acidente de tr&acirc;nsito, n&atilde;o podendo ser imputado tais danos ao LOCADOR; ap&oacute;s a devolu&ccedil;&atilde;o dos ve&iacute;culos ser&aacute; realizada uma vistoria de encerramento (checklist), onde ser&atilde;o analisadas poss&iacute;veis avarias nos ve&iacute;culos. Caso isso ocorra, ser&aacute; de responsabilidade do LOCAT&Aacute;RIO, onde o LOCADOR ter&aacute; que apresentar 03 or&ccedil;amentos para ser escolhido o de menor</li>
</ol>
<p style="text-align: justify;"><strong>CL&Aacute;USULA QUINTA - DAS MULTAS DE TR&Acirc;NSITO</strong></p>
<p style="text-align: justify;">Valor para repara&ccedil;&atilde;o das devidas avarias.</p>
<ol style="text-align: justify;">
<li>d) efetuar os pagamentos dos servi&ccedil;os executados na forma e nos prazos estabelecidos neste instrumento, desde que cumpridas, regular e integralmente, as obriga&ccedil;&otilde;es assumidas pelo LOCADOR</li>
</ol>
<p style="text-align: justify;">5.1 durante a vig&ecirc;ncia do presente contrato, todas as multas de tr&acirc;nsito que vierem a ser aplicadas ser&atilde;o de responsabilidade do LOCAT&Aacute;RIO e, se pagas pelo LOCADOR, ser&atilde;o reembolsados no prazo de 30 (trinta) dias.</p>
<p style="text-align: justify;"><strong>CL&Aacute;USULA SEXTA &ndash; DO PRAZO DE VIG&Ecirc;NCIA </strong></p>
<p style="text-align: justify;">6.1. O presente Contrato vigorar&aacute; pelo prazo de 01 (um) m&ecirc;s, com in&iacute;cio em 01/11/2023 e termino em 05/12/2023, s&oacute; podendo ser prorrogado mediante Termo Aditivo escrito firmado de comum acordo entre as partes.</p>
<p style="text-align: justify;">6.2. A cada 12 (doze) meses de vig&ecirc;ncia do presente instrumento, o pre&ccedil;o disposto na Cl&aacute;usula seguinte, ser&aacute; reajustado, com base em &Iacute;ndice abaixo descrito: a) 100% da varia&ccedil;&atilde;o do IPCA;</p>
<p style="text-align: justify;">6.3. Na falta deste par&acirc;metro ser&aacute; utilizado outro &iacute;ndice eleito de comum acordo pelas partes.<strong>&nbsp;</strong></p>
<p style="text-align: justify;"><strong>CL&Aacute;USULA S&Eacute;TIMA &ndash; DA RESCIS&Atilde;O MOTIVADA </strong></p>
<p style="text-align: justify;">7.1. Considerar-se-&aacute; o presente contrato autom&aacute;tica e imediatamente rescindido, de pleno direito, independentemente de qualquer notifica&ccedil;&atilde;o ou interpela&ccedil;&atilde;o judicial ou extrajudicial, sem preju&iacute;zo do ressarcimento de eventuais perdas e danos, nas seguintes hip&oacute;teses:</p>
<p style="text-align: justify;">(a) se qualquer das partes ceder ou transferir a terceiros, total ou parcialmente, por qualquer forma, direitos e obriga&ccedil;&otilde;es que tiver assumido atrav&eacute;s deste contrato, sem a pr&eacute;via e expressa autoriza&ccedil;&atilde;o da outra;</p>
<p style="text-align: justify;">(b) Pedido de fal&ecirc;ncia, recupera&ccedil;&atilde;o judicial ou extrajudicial ou, ainda, insolv&ecirc;ncia de qualquer das partes.</p>
<p style="text-align: justify;">&nbsp;<strong>CL&Aacute;USULA OITAVA &ndash; DA RESCIS&Atilde;O ANTECIPADA</strong></p>
<p style="text-align: justify;">8.1 as partes acordam que este Contrato poder&aacute; ser rescindido por m&uacute;tuo acordo ou, ainda, ser denunciado unilateralmente, sem justa causa, a qualquer momento, por qualquer uma delas, ficando a parte interessada obrigada a notificar, por escrito, a outra de sua inten&ccedil;&atilde;o de romp&ecirc;-lo com, no m&iacute;nimo, 30 (trinta) dias de anteced&ecirc;ncia. O exerc&iacute;cio dessa faculdade n&atilde;o implicar&aacute; no pagamento de qualquer multa contratual ou indeniza&ccedil;&atilde;o de qualquer natureza.</p>
<p style="text-align: justify;"><strong>CL&Aacute;USULA NONA &ndash; DO V&Iacute;NCULO EMPREGAT&Iacute;CIO</strong></p>
<p style="text-align: justify;">9.1. Fica expressamente acordado que a presta&ccedil;&atilde;o dos servi&ccedil;os ora contratados n&atilde;o faz com que seja estabelecido v&iacute;nculo de emprego entre a CONTRATANTE e os empregados e/ou prepostos, a qualquer t&iacute;tulo, da CONTRATADA, n&atilde;o sendo a CONTRATANTE respons&aacute;vel pelo adimplemento de qualquer obriga&ccedil;&atilde;o de cunho trabalhista, previdenci&aacute;rio, fundi&aacute;rio ou acident&aacute;rio, CONTRATADA. Desta forma, fica expressamente estipulada a isen&ccedil;&atilde;o da CONTRATANTE por quaisquer encargos trabalhistas e/ou previdenci&aacute;rios incidentes ou que vierem a incidir, bem como, pela infortun&iacute;stica e eventuais acidentes de trabalho relacionados com a CONTRATADA.</p>
<p style="text-align: justify;"><strong>CL&Aacute;USULA D&Eacute;CIMA&ndash; DA TRIBUTA&Ccedil;&Atilde;O </strong></p>
<p style="text-align: justify;">10.1. Todos os impostos, tributos, taxas e encargos federais, estaduais ou municipais que incidam sobre as atividades, servi&ccedil;os e/ou fornecimentos e obriga&ccedil;&otilde;es do Contrato, ser&atilde;o recolhidos sob responsabilidade e &ocirc;nus da CONTRATADA, exceto aqueles indicados no item 11.1.1 abaixo, que ser&aacute; retido pela CONTRATANTE.A CONTRATANTE se reserva o direito de verificar e acompanhar o pagamento destes encargos legais, ou pedir c&oacute;pia, regularmente e a qualquer tempo.</p>
<p style="text-align: justify;">10.2. Os tributos e contribui&ccedil;&otilde;es, quando devidos na fonte, ser&atilde;o retidos na forma da lei, fazendo-se os pagamentos &agrave; CONTRATADA por seu valor l&iacute;quido.</p>
<p style="text-align: justify;">10.3. Face ao disposto no caput desta Cl&aacute;usula, a CONTRATANTE n&atilde;o se responsabiliza pelo ressarcimento de quaisquer multas, corre&ccedil;&atilde;o monet&aacute;ria, penalidades, juros e outras despesas resultantes da n&atilde;o observ&acirc;ncia de obriga&ccedil;&otilde;es tribut&aacute;rias, trabalhistas e previdenci&aacute;rias pela CONTRATADA.</p>
<p style="text-align: justify;"><strong>CL&Aacute;USULA D&Eacute;CIMA PRIMEIRA- CESS&Atilde;O, SUCESS&Atilde;O E NOVA&Ccedil;&Atilde;O </strong></p>
<p style="text-align: justify;">11.1. Nenhuma das partes poder&aacute;, sem a pr&eacute;via e expressa concord&acirc;ncia por escrito da outra, ceder, transferir, penhorar ou caucionar, total ou parcialmente, os direitos, as obriga&ccedil;&otilde;es e/ou os cr&eacute;ditos resultantes do presente contrato, ressalvados os casos de reorganiza&ccedil;&atilde;o societ&aacute;ria e/ou sucess&atilde;o empresarial relativos &agrave; CONTRATANTE.</p>
<p style="text-align: justify;">11.2. Todos os direitos e obriga&ccedil;&otilde;es oriundos deste contrato ser&atilde;o obrigatoriamente respeitados pelos sucessores das partes, a qualquer t&iacute;tulo.</p>
<p style="text-align: justify;">11.3. A eventual toler&acirc;ncia de uma parte em rela&ccedil;&atilde;o &agrave; outra, em face de atraso ou n&atilde;o cumprimento, total ou parcial, de qualquer das obriga&ccedil;&otilde;es acordadas no presente Contrato n&atilde;o constituir&aacute; nova&ccedil;&atilde;o, mas mera liberalidade, sendo facultado &agrave; parte afetada, a qualquer momento, exigir o cumprimento das condi&ccedil;&otilde;es contratuais tal como originalmente acordadas.</p>
<p style="text-align: justify;">&nbsp;<strong>CL&Aacute;USULA D&Eacute;CIMA SEGUNDA &ndash; DAS DISPOSI&Ccedil;&Otilde;ES GERAIS </strong></p>
<p style="text-align: justify;">12.1. As partes contratantes reconhecem, expressamente, que a CONTRATADA n&atilde;o &eacute; empregada, mandat&aacute;ria ou procuradora da CONTRATANTE, n&atilde;o podendo, por conseguinte, assumir obriga&ccedil;&otilde;es e/ou responsabilidades em nome da CONTRATANTE, exceto aquelas expressamente previstas no presente Contrato</p>
<p style="text-align: justify;">12.2. Quaisquer atrasos ou falhas, por quaisquer das partes, no cumprimento das obriga&ccedil;&otilde;es estabelecidas por for&ccedil;a deste Contrato n&atilde;o constituir&atilde;o falta, nem dar&atilde;o motivos &agrave; rescis&atilde;o ou &agrave; reclama&ccedil;&atilde;o por danos e/ou preju&iacute;zos, quando causados por eventos de caso fortuito ou de for&ccedil;a maior, isto &eacute;, por fato necess&aacute;rio, cujos efeitos n&atilde;o era poss&iacute;vel evitar ou impedir, nos termos do artigo 393, do C&oacute;digo Civil. As partes, desde j&aacute;, comprometem-se a envidar seus melhores esfor&ccedil;os para superar o evento ocorrido e para voltar a cumprir, com a maior brevidade poss&iacute;vel, as suas obriga&ccedil;&otilde;es aqui assumidas.</p>
<p style="text-align: justify;">12.3. Este Contrato revoga e substitui eventual acordo de mesmo objeto anteriormente celebrado entre as partes que com rela&ccedil;&atilde;o ao qual mutuamente outorgam, nesta data, plena, geral, irrevog&aacute;vel e irretrat&aacute;vel quita&ccedil;&atilde;o, para nada mais ser devido seja a que t&iacute;tulo for.</p>
<p style="text-align: justify;">12.4. Caso alguma disposi&ccedil;&atilde;o do presente Contrato seja declarada ilegal ou inexequ&iacute;vel, as partes pretendem que as disposi&ccedil;&otilde;es fundamentais remanescentes que as induziram a celebrar o presente Contrato permane&ccedil;am v&aacute;lidas.</p>
<p style="text-align: justify;">12.5. As disposi&ccedil;&otilde;es contratuais n&atilde;o poder&atilde;o ser alteradas ou modificadas a n&atilde;o ser mediante acordo escrito entre as Partes, formalizado atrav&eacute;s de Termo Aditivo.</p>
<p style="text-align: justify;">&nbsp;<strong>CL&Aacute;USULA D&Eacute;CIMA TERCEIRA &ndash; SIGILO E CONFIDENCIALIDADE</strong></p>
<p style="text-align: justify;">13.1. A CONTRATADA, desde j&aacute;, se obriga por si, seus diretores, funcion&aacute;rios ou pessoal contratado, a manter o mais completo e absoluto sigilo em rela&ccedil;&atilde;o a toda e quaisquer informa&ccedil;&otilde;es relacionada &agrave;s atividades da CONTRATANTE e/ou suas coligadas ou subsidi&aacute;rias, das quais venha a ter conhecimento ou acesso em raz&atilde;o do cumprimento do presente ajuste, n&atilde;o podendo, sob qualquer pretexto, utiliz&aacute;-las para si, divulgar, revelar, reproduzir ou delas dar conhecimento a terceiros, sem a pr&eacute;via e expressa autoriza&ccedil;&atilde;o da CONTRATANTE, responsabilizando-se, em caso de descumprimento dessa obriga&ccedil;&atilde;o assumida, por eventuais perdas e danos, lucros cessantes e demais comina&ccedil;&otilde;es legais.</p>
<p style="text-align: justify;">13.2. As obriga&ccedil;&otilde;es assumidas nesta Cl&aacute;usula subsistir&atilde;o a resili&ccedil;&atilde;o, rescis&atilde;o ou t&eacute;rmino do presente ajuste, por qualquer motivo, vigorando por prazo indeterminado, alcan&ccedil;ando as partes, seus representantes e sucessores a qualquer t&iacute;tulo.</p>
<p style="text-align: justify;">13.3. Disposto nesta Cl&aacute;usula n&atilde;o se aplicar&aacute; a qualquer informa&ccedil;&atilde;o sobre a qual a CONTRATADA possa demonstrar que:</p>
<p style="text-align: justify;">(i) na ocasi&atilde;o de sua divulga&ccedil;&atilde;o, ela j&aacute; era de dom&iacute;nio p&uacute;blico</p>
<p style="text-align: justify;">(ii) ap&oacute;s a revela&ccedil;&atilde;o para a CONTRATADA, foi publicada ou tornou-se de outra forma de dom&iacute;nio p&uacute;blico, por motivo n&atilde;o relacionado com eventual falha no recebimento da informa&ccedil;&atilde;o pela pr&oacute;pria CONTRATADA;</p>
<p style="text-align: justify;">(iii) estava legalmente na posse da CONTRATADA, na ocasi&atilde;o em que a mesma a divulgou.</p>
<p style="text-align: justify;">13.4. Fica desde j&aacute; convencionado que, para efeitos do disposto nesta Cl&aacute;usula, as informa&ccedil;&otilde;es confidenciais da CONTRATANTE n&atilde;o conter&atilde;o ou vir&atilde;o acompanhadas necessariamente de qualquer tipo de advert&ecirc;ncia de confidencialidade, devendo tal caracter&iacute;stica ser sempre presumida pela CONTRATADA.</p>
<p style="text-align: justify;">&nbsp;<strong>CL&Aacute;USULA D&Eacute;CIMA QUARTA - DO FORO </strong></p>
<p style="text-align: justify;">Fica eleito o Foro da Comarca de Mogi das Cruzes, Estado de S&atilde;o Paulo, com ren&uacute;ncia expressa a qualquer outro, por mais privilegiado que seja, para dirimir quaisquer d&uacute;vidas e/ou controv&eacute;rsias oriundas do presente contrato.</p>
<p style="text-align: justify;">E, por estarem assim justas e contratadas, as partes assinam o presente instrumento elaborado em 02 (duas) vias de igual forma e conte&uacute;do, juntamente com as 02 (duas) testemunhas abaixo identificadas.</p>


<div><p class="parag"><b>DEMAIS OBSERVAÇÕES:</b> {{$locacao->obs}}</p></div>
</div><br><br>

        <div style="text-align: center; font-size: 12">Mogi das Cruzes - SP, {{ $dataAtual->isoFormat('DD MMMM YYYY') }}<br><br><br><br>

            ___________________________________________________________<br>
            LOCATÁRIO: {{$locacao->Cliente->nome}}<br><br><br><br>

            ___________________________________________________________<br>
            LOCADOR: EXPRESSO RENT CAR.



        </div>











</body>
</html>
