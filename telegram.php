<?php
 //Variaveis de POST, Alterar somente se necessário 
 //====================================================
 $nome = $_POST['nomeTelegram'];
 $email = $_POST['emailTelegram'];
 $telefone = $_POST['telephoneTelepgram']; 

 //====================================================
 
 //REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
 //==================================================== 
 $email_remetente = " faq@outliersindentistry.com"; // deve ser uma conta de email do seu dominio 
 //====================================================
 
 //Configurações do email, ajustar conforme necessidade
 //==================================================== 
 $email_destinatario = "contato.matheusteixeira@gmail.com"; // pode ser qualquer email que receberá as mensagens
 $email_reply = "$email"; 
 $email_assunto = "Contato formmail"; // Este será o assunto da mensagem
 //====================================================
 
 //Monta o Corpo da Mensagem
 //====================================================
 $email_conteudo = "Nome = $nome \n"; 
 $email_conteudo .= "Email = $email \n";
 $email_conteudo .= "Telefone = $telefone \n"; 

 //====================================================
 
 //Seta os Headers (Alterar somente caso necessario) 
 //==================================================== 
 $email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
 //====================================================
 
 //Enviando o email 
 //==================================================== 
 if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){ 
 echo "<script>
  alert('Recebemos sua mensagem. Entraremos em contato em breve.')
  window.history.back()
 </script>"; 
 } 
 else{ 
  echo "<script>
  alert('Ops! Algo deu errado, tente novamente em alguns minutos.')
  window.history.back()
 </script>"; 
 } 
 //====================================================
?>