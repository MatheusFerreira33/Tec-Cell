<?php
include './configuracao.php';
include './conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Celke - PagSeguro</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link href="css/personalizado.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <h1 class="display-4">Finalizar a Compra</h1>
                <div class="col-md-4 order-md-2 mb-4">
                    Produtos
                </div>

                <div class="col-md-8 order-md-1">
                    <span class="endereco" data-endereco="<?php echo URL; ?>"></span>
                    <span id="msg"></span>
                    <form name="formPagamento" action="" id="formPagamento">
                        <span id="msg"></span>

                        <h4 class="mb-3">Dados do Comprador</h4>

                        <div class="mb-3">
                            <label>Nome</label>                            
                            <input type="text" name="senderName" id="senderName" placeholder="Nome completo" value="Jose Comprador" class="form-control" required>                        
                        </div>

                        <div class="mb-3">
                            <label>CPF</label>                            
                            <input type="text" name="senderCPF" id="senderCPF" placeholder="CPF sem traço" value="22111944785" class="form-control" required>                       
                        </div>

                        <div class="mb-3">
                            <label>E-mail</label>  
                            <input type="email" name="senderEmail" id="senderEmail" placeholder="E-mail do comprador" value="c66860546910556664625@sandbox.pagseguro.com.br" class="form-control" required>                                                
                        </div>

                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <label>DDD</label>
                                <input type="text" name="senderAreaCode" id="senderAreaCode" placeholder="DDD" value="11" class="form-control" required>
                            </div>
                            <div class="col-md-9 mb-3">
                                <label>Telefone</label>
                                <input type="text" name="senderPhone" id="senderPhone" placeholder="Somente número" value="56273440" class="form-control" required>
                            </div>
                        </div>

                        <h4 class="mb-3">Endereço de Entrega</h4>

                        <input type="hidden" name="shippingAddressRequired" id="shippingAddressRequired" value="true">

                        <div class="row">
                            <div class="col-md-9 mb-3">
                                <label>Logradouro</label>
                                <input type="text" name="shippingAddressStreet" class="form-control" id="shippingAddressStreet" placeholder="Av. Rua" value="Av. Brig. Faria Lima" required>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label>Número</label>
                                <input type="text" name="shippingAddressNumber" class="form-control" id="shippingAddressNumber" placeholder="Número" value="1384" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label>Complemento</label>
                            <input type="text" name="shippingAddressComplement" class="form-control" id="shippingAddressComplement" placeholder="Complemento" value="5o andar">
                        </div>

                        <div class="row">
                            <div class="col-md-5 mb-3">
                                <label>Bairro</label>
                                <input type="text" name="shippingAddressDistrict" class="form-control" id="shippingAddressDistrict" placeholder="Bairro" value="Jardim Paulistano" required>
                            </div>
                            <div class="col-md-5 mb-3">
                                <label>Cidade</label>
                                <input type="text" name="shippingAddressCity" class="form-control" id="shippingAddressCity" placeholder="Cidade" value="Sao Paulo" required>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label>Estado</label>
                                <select name="shippingAddressState" class="custom-select d-block w-100" id="shippingAddressState" required>
                                    <option value="">Selecione</option>
                                    <option value="AC">AC</option>
                                    <option value="AL">AL</option>
                                    <option value="AP">AP</option>
                                    <option value="AM">AM</option>
                                    <option value="BA">BA</option>
                                    <option value="CE">CE</option>
                                    <option value="DF">DF</option>
                                    <option value="ES">ES</option>
                                    <option value="GO">GO</option>
                                    <option value="MA">MA</option>
                                    <option value="MT">MT</option>
                                    <option value="MS">MS</option>
                                    <option value="MG">MG</option>
                                    <option value="PA">PA</option>
                                    <option value="PB">PB</option>
                                    <option value="PR">PR</option>
                                    <option value="PE">PE</option>
                                    <option value="PI">PI</option>
                                    <option value="RJ">RJ</option>
                                    <option value="RN">RN</option>
                                    <option value="RS">RS</option>
                                    <option value="RO">RO</option>
                                    <option value="RR">RR</option>
                                    <option value="SC">SC</option>
                                    <option value="SP" selected>SP</option>
                                    <option value="SE">SE</option>
                                    <option value="TO">TO</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label>CEP</label>
                            <input type="text" name="shippingAddressPostalCode" class="form-control" id="shippingAddressPostalCode" placeholder="CEP sem traço" value="01452002" required>
                        </div>

                        <!-- Moeda utilizada para pagamento -->
                        <input type="hidden" name="shippingAddressCountry" id="shippingAddressCountry" value="BRL">
                        <!-- 1 - PAC / 2 - SEDEX / 3 - Sem frete -->
                        <input type="hidden" name="shippingType" value="3">
                        <!-- Valor do frete -->
                        <input type="hidden" name="shippingCost" value="0.00">

                        <h4 class="mb-3">Escolha forma de pagamento</h4>

                        <div class="custom-control custom-radio">
                            <input type="radio" name="paymentMethod" class="custom-control-input" id="creditCard" value="creditCard" onclick="tipoPagamento('creditCard')">
                            <label class="custom-control-label" for="creditCard">Cartão de Crédito</label>
                        </div>

                        <div class="custom-control custom-radio">
                            <input type="radio" name="paymentMethod" class="custom-control-input" id="boleto" value="boleto" onclick="tipoPagamento('boleto')">
                            <label class="custom-control-label" for="boleto">Boleto</label>
                        </div>

                        <div class="custom-control custom-radio">
                            <input type="radio" name="paymentMethod" class="custom-control-input" id="eft" value="eft" onclick="tipoPagamento('eft')">
                            <label class="custom-control-label" for="eft">Débito Online</label>
                        </div>

                        <!-- Pagamento com débito online -->
                        <div class="mb-3 bankName">
                            <label class="bankName">Banco</label>
                            <select name="bankName" id="bankName" class="form-control select-bank-name bankName">

                            </select>
                        </div>

                        <!-- Pagamento com cartão de crédito -->
                        <input type="hidden" name="bandeiraCartao" id="bandeiraCartao">
                        <input type="hidden" name="valorParcelas" id="valorParcelas">
                        <input type="hidden" name="tokenCartao" id="tokenCartao">
                        <input type="hidden" name="hashCartao" id="hashCartao">
                        
                        <div class="mb-3 creditCard">
                            <label class="creditCard">Banco</label>
                            <div class="input-group">
                                <input type="text"  name="numCartao" class="form-control" id="numCartao">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bandeira-cartao creditCard">   </span>
                                </div>
                            </div>
                            <small id="numCartao" class="form-text text-muted">
                                Preencha para ver o parcelamento
                            </small>
                        </div>
                        
                        <div class="mb-3 creditCard">
                            <label class="creditCard">Quantidades de Parcelas</label>
                            <select name="qntParcelas" id="qntParcelas" class="form-control select-qnt-parcelas creditCard">

                            </select>
                        </div>

                        <div class="mb-3 creditCard">
                            <label class="creditCard">Nome do titular</label>
                            <input type="text" name="creditCardHolderName" class="form-control" id="creditCardHolderName" placeholder="Nome igual ao escrito no cartão" value="Jose Comprador">
                            <small id="creditCardHolderName" class="form-text text-muted">
                                Como está gravado no cartão
                            </small>
                        </div>

                        <div class="row creditCard">
                            <div class="col-md-6 mb-3 creditCard">
                                <label class="creditCard">Mês de Validade</label>
                                <input type="text" name="mesValidade" id="mesValidade" maxlength="2" value="12"  class="form-control creditCard">
                            </div>
                            <div class="col-md-6 mb-3 creditCard">
                                <label class="creditCard">Ano de Validade</label>
                                <input type="text" name="anoValidade" id="anoValidade" maxlength="4" value="2030" class="form-control creditCard">
                            </div>
                        </div>

                        <div class="mb-3 creditCard">                            
                            <label class="creditCard">CVV do cartão</label>
                            <input type="text" name="numCartao" class="form-control creditCard" id="cvvCartao" maxlength="3" value="123">
                            <small id="cvvCartao" class="form-text text-muted creditCard">
                                Código de 3 digitos impresso no verso do cartão
                            </small>
                        </div>

                        <div class="row creditCard">
                            <div class="col-md-6 mb-3 creditCard">
                                <label class="creditCard">CPF do dono do Cartão</label>
                                <input type="text" name="creditCardHolderCPF" id="creditCardHolderCPF" placeholder="CPF sem traço" value="22111944785" class="form-control creditCard">
                            </div>
                            <div class="col-md-6 mb-3 creditCard">
                                <label class="creditCard">Data de Nascimento</label>
                                <input type="text" name="creditCardHolderBirthDate" id="creditCardHolderBirthDate" placeholder="Data de Nascimento. Ex: 12/12/1912" value="27/10/1987" class="form-control creditCard">
                            </div>
                        </div>

                        <h4 class="mb-3 creditCard">Endereço do titular do cartão</h4>
                        <div class="row creditCard">
                            <div class="col-md-9 mb-3 creditCard">
                                <label class="creditCard">Logradouro</label>
                                <input type="text" name="billingAddressStreet" id="billingAddressStreet" placeholder="Av. Rua" value="Av. Brig. Faria Lima" class="creditCard form-control">
                            </div>                            
                            <div class="col-md-3 mb-3 creditCard">
                                <label class="creditCard">Número</label>
                                <input type="text" name="billingAddressNumber" id="billingAddressNumber" placeholder="Número" value="1384" class="creditCard form-control">
                            </div>
                        </div>
                        
                        <div class="mb-3 creditCard">
                            <label class="creditCard">Complemento</label>
                            <input type="text" name="billingAddressComplement" id="billingAddressComplement" placeholder="Complemento" value="5o andar" class="creditCard form-control">
                        </div>
                        
                       
                        
                        <div class="row creditCard">
                            <div class="col-md-5 mb-3 creditCard">
                                <label class="creditCard">Bairro</label>
                                <input type="text" name="billingAddressDistrict" id="billingAddressDistrict" placeholder="Bairro" value="Jardim Paulistano" class="creditCard form-control">
                            </div>
                            <div class="col-md-5 mb-3 creditCard">
                                <label class="creditCard">Cidade</label>
                                <input type="text" name="billingAddressCity" id="billingAddressCity" placeholder="Cidade" value="Sao Paulo" class="creditCard form-control">
                            </div>
                            <div class="col-md-2 mb-3 creditCard">
                                <label class="creditCard">Estado</label>
                                <select name="billingAddressState" class="custom-select d-block w-100 creditCard" id="billingAddressState">
                                    <option value="">Selecione</option>
                                    <option value="AC">AC</option>
                                    <option value="AL">AL</option>
                                    <option value="AP">AP</option>
                                    <option value="AM">AM</option>
                                    <option value="BA">BA</option>
                                    <option value="CE">CE</option>
                                    <option value="DF">DF</option>
                                    <option value="ES">ES</option>
                                    <option value="GO">GO</option>
                                    <option value="MA">MA</option>
                                    <option value="MT">MT</option>
                                    <option value="MS">MS</option>
                                    <option value="MG">MG</option>
                                    <option value="PA">PA</option>
                                    <option value="PB">PB</option>
                                    <option value="PR">PR</option>
                                    <option value="PE">PE</option>
                                    <option value="PI">PI</option>
                                    <option value="RJ">RJ</option>
                                    <option value="RN">RN</option>
                                    <option value="RS">RS</option>
                                    <option value="RO">RO</option>
                                    <option value="RR">RR</option>
                                    <option value="SC">SC</option>
                                    <option value="SP" selected>SP</option>
                                    <option value="SE">SE</option>
                                    <option value="TO">TO</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="creditCard">CEP</label>
                            <input type="text" name="billingAddressPostalCode" class="form-control creditCard" id="billingAddressPostalCode" placeholder="CEP sem traço" value="01452002">
                        </div>
                                                

                        <input type="hidden" name="billingAddressCountry" id="billingAddressCountry" value="BRL">

                        <input type="hidden" name="receiverEmail" id="receiverEmail" value="<?php echo EMAIL_LOJA; ?>">

                        <input type="hidden" name="currency" id="currency" value="<?php echo MOEDA_PAGAMENTO; ?>">

                        <input type="hidden" name="notificationURL" id="notificationURL" value="<?php echo URL_NOTIFICACAO; ?>">
                        <?php
                        $query_car = "SELECT SUM(valor_venda * qnt_produto) AS total_venda, carrinho_id FROM carrinhos_produtos WHERE carrinho_id = 1";

                        $resultado_car = $conn->prepare($query_car);
                        $resultado_car->execute();

                        $row_car = $resultado_car->fetch(PDO::FETCH_ASSOC);

                        $total_venda = number_format($row_car['total_venda'], 2, '.', '');
                        ?>

                        <input type="hidden" name="reference" id="reference" value="<?php echo $row_car['carrinho_id'] ?>">

                        <input type="hidden" name="amount" id="amount" value="<?php echo $total_venda; ?>">

                        <!--<input type="hidden" name="hashCartao" id="hashCartao">-->

                        <input type="hidden" name="shippingAddressCountry" id="shippingAddressCountry" value="BRL">  

                        <input type="submit" name="btnComprar" id="btnComprar" value="Comprar">
                    </form>
                </div>
            </div>
        </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>

        <script type="text/javascript" src="<?php echo SCRIPT_PAGSEGURO; ?>"></script>
        <script src="js/personalizado.js"></script>
    </body>
</html>
