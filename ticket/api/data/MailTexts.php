<?php
class MailTexts {
  public static function getTexts() {
    return [
        'en' => [
          'USER_SIGNUP' => [
              'Signup {{to}} - River-Shako',
              'Verify your account',
              'Welcome to our support center, {{name}}!. We need you to verify this email in order to get access to your account.',
              'Use this code in {{url}}/verify-token/{{to}}/{{verificationToken}} or click the button below.',
          ],
          'USER_PASSWORD' => [
              'Password edited - River-Shako',
              'Password changed',
              'Hi, {{name}}. We want to inform you that your password has changed from your customer panel.'
          ],
          'USER_EMAIL' => [
              'Email edited - River-Shako',
              'Email changed',
              'Hi, {{name}}. We want to inform you that your email has changed to {{newemail}} from your customer panel.'
          ],
          'PASSWORD_FORGOT' => [
              'Recover password - River-Shako',
              'Recover password',
              'Hi, {{name}}. You have requested to recover your password.',
              'Use this code in {{url}}/recover-password?email={{to}}&token={{token}} or click the button below.',
          ],
          'USER_INVITE' => [
              'You have been invited - River-Shako',
              'You have been invited',
              'Hi, {{name}}. You have been invited to join our support center.',
              'Use this code in {{url}}/recover-password?email={{to}}&token={{token}}&invited=true or click the button below to set up your password.'
          ],
          'USER_SYSTEM_DISABLED' => [
              'Access system changed - River-Shako',
              'Access system changed',
              'Hello, {{name}}. The system to access tickets has changed.',
              'You can access and see to your tickets by using your email and the ticket number.Click in the button below to see your tickets.',
          ],
          'USER_SYSTEM_ENABLED' => [
              'Account created - River-Shako',
              'Account created',
              'Hello, {{name}}. We have created an account where you can access the tickets you have sent us.',
              'You can access your account by using this email <i>({{to}})</i> and password below.Please change the password as soon as you log in.',
          ],
          'TICKET_CREATED' => [
              '#{{ticketNumber}} Ticket created - River-Shako',
              'Ticket created',
              'Hello, {{name}}. You have sent a new ticket titled <i>{{title}}</i> to our support center.',
              'You can access to the ticket by its ticket number or you can click on the button below.',
          ],
          'TICKET_RESPONDED' => [
              '#{{ticketNumber}} New response - River-Shako',
              'Ticket responded',
              'Hello, {{name}}. You have received a response in the ticket titled <i>{{title}}</i>.',
              'Please click below to see the new response.'
          ],
          'TICKET_CLOSED' => [
             '#{{ticketNumber}} Ticket closed - River-Shako',
              'Ticket closed',
              'Hello, {{name}}. A ticket you sent titled <i>{{title}}</i> has been closed.',
              'You can access to the ticket by its ticket number. Or you can click on the button below.'
          ],
          'TICKET_CREATED_STAFF' => [
              '#{{ticketNumber}} Ticket created - River-Shako',
              'Ticket created',
              'User {{name}} has created a new ticket titled <i>{{title}}</i>.',
              'You can access to the ticket by its ticket number.',
          ],
        ],
        'cn' => [
          'USER_SIGNUP' => [
              '注册 {{to}} - River-Shako',
              '验证您的帐户',
              '欢迎来到我们的支援中心{{name}} !. 我们需要您验证此电子邮件才能访问您的帐户。',
              '使用此代码 {{url}}/verify-token/{{to}}/{{verificationToken}} 或单击下面的按钮.',
          ],
          'USER_PASSWORD' => [
              '密码已编辑 - River-Shako',
              '密码已更改',
              '嗨，{{name}}。 我们想通知您，您的密码已从您的客户面板更改。'
          ],
          'USER_EMAIL' => [
              '电子邮件已修改 - River-Shako',
              '电子邮件已更改',
              '嗨，{{name}}。 我们想通知您，您的电子邮件已从您的客户面板更改为 {{newemail}}。'
          ],
          'PASSWORD_FORGOT' => [
              '恢复密码 - River-Shako',
              '恢复密码',
              '喂 {{name}}。 您已要求恢复密码。',
              '使用此代码 {{url}}/recover-password?email={{to}}&token={{token}} 或单击下面的按钮.',
          ],
          'USER_INVITE' => [
              '您已受邀 - River-Shako',
              '您已受邀',
              '你好, {{name}}. 邀请您加入我们的支持中心.',
              '使用此代码 {{url}}/recover-password?email={{to}}&token={{token}}&invited=true 或单击下面的按钮来设置密码.'
          ],
          'USER_SYSTEM_DISABLED' => [
              '访问系统更改 - River-Shako',
              '访问系统更改',
              '您好，{{name}}。 访问票证的系统已更改。',
              '您可以通过使用您的电子邮件和票号访问和查看您的机票。 点击下面的按钮查看您的票。',
          ],
          'USER_SYSTEM_ENABLED' => [
              '帐户已创建 - River-Shako',
              '帐户已创建',
              '您好，{{name}}。 我们已经创建了一个帐户，您可以访问您发送给我们的票。',
              '您可以在下面使用此电子邮件 <i>({{to}})</i> 和密码访问您的帐户。 请在登录后立即更改密码。',
          ],
          'TICKET_CREATED' => [
              '#{{ticketNumber}} 已创建票证 - River-Shako',
              '票据创建',
              '您好，{{name}}。 您已将一张名为 <i>{{title}}</i> 的新票发送到我们的支持中心。',
              '您可以通过其票号访问票证。 或者你可以点击下面的按钮。',
          ],
          'TICKET_RESPONDED' => [
              '#{{ticketNumber}} 新反应 - River-Shako',
              '机票回应',
              '您好，{{name}}。 您在票证名称 <i>{{title}}</i> 中收到了回复。',
              '请点击下面查看新的回复。'
          ],
          'TICKET_CLOSED' => [
              '#{{ticketNumber}} 票已关闭 - River-Shako',
              '票關閉',
              '您好，{{name}}。 您发送的名为 <i>{{title}}</i> 的票已经关闭。',
              '您可以通过其票号访问票证。 或者你可以点击下面的按钮。'
          ],
          'TICKET_CREATED_STAFF' => [
              '#{{ticketNumber}} 已创建票证 - River-Shako',
              '票据创建',
              '用戶 {{name}}。 他創造了一個題為新票 <i>{{title}}</i>。',
              '您可以通过其票号访问票证。',
          ],
        ],
        'de' => [
          'USER_SIGNUP' => [
              'Anmelden {{to}} - River-Shako',
              'Überprüfen Sie Ihr Konto',
              'Willkommen in unserem Support-Center, {{name}} !. Wir müssen Sie diese E-Mail bestätigen, um Zugang zu Ihrem Konto zu erhalten.',
              'Verwenden Sie diesen Code in {{url}}/verify-token/{{to}}/{{verificationToken}} oder klicken Sie auf die Schaltfläche unten.',
          ],
          'USER_PASSWORD' => [
              'Passwort bearbeitet - River-Shako',
              'Passwort geändert',
              'Hallo, {{name}}. Wir möchten Sie darüber informieren, dass sich Ihr Passwort von Ihrem Kundenbereich geändert hat.'
          ],
          'USER_EMAIL' => [
              'E-Mail bearbeitet - River-Shako',
              'E-Mail geändert',
              'Hallo, {{name}}. Wir möchten Sie darüber informieren, dass Ihre E-Mail von Ihrem Kundenbereich zu {{newemail}} geändert wurde.'
          ],
          'PASSWORD_FORGOT' => [
              'Passwort wiederherstellen - River-Shako',
              'Passwort wiederherstellen',
              'Hallo, {{name}}. Sie haben aufgefordert, Ihr Passwort wiederherzustellen.',
              'Verwenden Sie diesen Code in {{url}}/recover-password?email={{to}}&token={{token}} oder klicken Sie auf die Schaltfläche unten.',
          ],
          'USER_INVITE' => [
              'Du bist eingeladen - River-Shako',
              'Du bist eingeladen',
              'Hallo, {{name}}. Sie wurden zu unserem Support-Center eingeladen.',
              'Verwenden Sie diesen Code in {{url}}/recover-password?email={{to}}&token={{token}}&invited=true oder klicken Sie auf die Schaltfläche unten, um Ihr Passwort einzurichten.'
          ],
          'USER_SYSTEM_DISABLED' => [
              'Access system changed - River-Shako',
              'Zugriffssystem geändert',
              'Hallo, {{name}}. Das System für den Zugriff auf Tickets hat sich geändert.',
              'können mit Ihren E-Mails und der Ticketnummer auf Ihre Tickets zugreifen und sie sehen.Klicken Sie auf die Schaltfläche unten, um Ihre Tickets zu sehen.',
          ],
          'USER_SYSTEM_ENABLED' => [
              'Account erstellt - River-Shako',
              'Account erstellt',
              'Hallo, {{name}}. Wir haben ein Konto erstellt, wo Sie auf die Tickets zugreifen können, die Sie uns geschickt haben.',
              'Sie können auf Ihr Konto zugreifen, indem Sie diese E-Mail <i>({{to}})</i> und das Passwort unten verwenden.Bitte ändern Sie das Passwort, sobald Sie sich anmelden.',
          ],
          'TICKET_CREATED' => [
              '#{{ticketNumber}} Ticket erstellt - River-Shako',
              'Ticket erstellt',
              'Hallo, {{name}}. Sie haben ein neues Ticket mit dem Titel <i>{{title}}</i> an unser Support-Center geschickt.',
              'Sie können das Ticket nach der Fahrkartennummer erreichen. Oder klicken Sie auf die Schaltfläche unten.',
          ],
          'TICKET_RESPONDED' => [
              '#{{ticketNumber}} Neue Antwort - River-Shako',
              'Ticket antwortete',
              'Hallo, {{name}}. Sie haben eine Antwort im Tickettitel <i>{{title}}</i> erhalten.',
              'Bitte klicken Sie unten, um die neue Antwort zu sehen.'
          ],
          'TICKET_CLOSED' => [
              '#{{ticketNumber}} Ticket geschlossen - River-Shako',
              'Ticket geschlossen',
              'Hallo, {{name}}. Ein Ticket, das Sie mit dem Titel <i>{{title}}</i> gesendet haben, wurde geschlossen.',
              'Sie können das Ticket nach der Fahrkartennummer erreichen. Oder klicken Sie auf die Schaltfläche unten.'
          ],
          'TICKET_CREATED_STAFF' => [
              '#{{ticketNumber}} Ticket erstellt - River-Shako',
              'Ticket erstellt',
              'Der Benutzer {{name}} hat ein neues Ticket erstellt berechtigt <i>{{title}}</i>.',
              'Sie können das Ticket nach der Fahrkartennummer erreichen.',
          ],
        ],
        'es' => [
          'USER_SIGNUP' => [
              'Registrado {{to}} - River-Shako',
              'Verifica tu cuenta',
              'Bienvenido a nuestro contro de soporte, {{name}}!. Necesitamos que verifiques este email para poder acceder a tu cuenta.',
              'Usá este código en {{url}}/verify-token/{{to}}/{{verificationToken}} o hacé click en el botón de abajo.',
          ],
          'USER_PASSWORD' => [
              'Contraseña a cambiado - River-Shako',
              'Contraseña cambiada',
              'Hola, {{name}}. Queremos informate que tu contraseña a sido cambiada desde el panel de usuario.'
          ],
          'USER_EMAIL' => [
              'Email a cambiado - River-Shako',
              'Email a cambiado',
              'Hola, {{name}}. Queremos informate que tu email ha cambiado a {{newemail}} desde el panel de control.'
          ],
          'PASSWORD_FORGOT' => [
              'Recuperar contraseña - River-Shako',
              'Recuperar contraseña',
              'Hola, {{name}}. Has requerido recuperar tu contraseña.',
              'Usá este codigo en {{url}}/recover-password?email={{to}}&token={{token}} o hacé click en el botón de abajo.',
          ],
          'USER_INVITE' => [
              'Haz sido invitado - River-Shako',
              'Haz sido invitado',
              'Hola, {{name}}. Haz sido invitado a unirte a nuestro sistema de soporte.',
              'Usa este código en {{url}}/recover-password?email={{to}}&token={{token}}&invited=true o haz click en el botón de abajo para establecer tu contraseña.'
          ],
          'USER_SYSTEM_DISABLED' => [
              'Sistema de acceso cambiado - River-Shako',
              'Sistema de acceso cambiado',
              'Hola, {{name}}. El sistema para acceder a los tickets ha cambiado.',
              'Ahora podes acceder a los tickets usando tu email y el numero de ticket.Hacé click en el botón de abajo para poder ver los tickets.',
          ],
          'USER_SYSTEM_ENABLED' => [
              'Cuenta creada - River-Shako',
              'Cuenta creada',
              'Hola, {{name}}. Hemos creado una cuenta donde puedes acceder a los tickets que nos has enviado.',
              'Puedes acceder usando tu email <i>({{to}})</i> y el la contraseña de abajo.Por favor, cambia tu contraseña tan pronto como ingreses al panel de usuario.',
          ],
          'TICKET_CREATED' => [
              '#{{ticketNumber}} Ticket creado - River-Shako',
              'Ticket creado',
              'Hola, {{name}}. Has creado un nuevo ticket titulado <i>{{title}}</i> en nuestro sistema de soporte.',
              'Puedes ver el ticket usando el numero de ticket prensentado abajo o puedes hacer click en el botón de más abajo.',
          ],
          'TICKET_RESPONDED' => [
              '#{{ticketNumber}} Nueva respuesta - River-Shako',
              'Nueva respuesta',
              'Hola, {{name}}. Has recibido una nueva respuesta en tu ticket titulado <i>{{title}}</i>.',
              'Por favor, has click abajo para ver la respuesta.'
          ],
          'TICKET_CLOSED' => [
              '#{{ticketNumber}} Ticket cerrado - River-Shako',
              'Ticket cerrado',
              'Hola, {{name}}. Un ticket que enviaste titulado <i>{{title}}</i> ha sido cerrado.',
              'Puedes acceder al ticket por su numero de ticket o haciendo click en el botón de abajo.'
          ],
          'TICKET_CREATED_STAFF' => [
              '#{{ticketNumber}} Ticket creado - River-Shako',
              'Ticket creado',
              'El usuario {{name}} ha creado un nuevo ticket titulado <i>{{title}}</i>.',
              'Puedes ver el ticket usando el numero de ticket prensentado abajo.',
          ],
        ],
        'fr' => [
          'USER_SIGNUP' => [
              'S\'inscrire {{to}} - River-Shako',
              'Vérifiez votre compte',
              'Bienvenue dans notre centre de support, {{name}}!. Nous vous demandons de vérifier cet e-mail afin d accéder à votre compte.',
              'Utilisez ce code dans {{url}}/verify-token/{{to}}/{{verificationToken}} ou cliquez sur le bouton ci-dessous.',
          ],
          'USER_PASSWORD' => [
              'Mot de passe modifié - River-Shako',
              'Mot de passe changé',
              'Salut, {{name}}. Nous souhaitons vous informer que votre mot de passe a changé de votre panel client.'
          ],
          'USER_EMAIL' => [
              'Courrier électronique - River-Shako',
              'Email modifié',
              'Salut, {{name}}. Nous souhaitons vous informer que votre adresse e-mail est devenue {{newemail}} dans votre panneau client.'
          ],
          'PASSWORD_FORGOT' => [
              'Récupérer mot de passe - River-Shako',
              'Récupérer mot de passe',
              'Salut, {{name}}. Vous avez demandé à récupérer votre mot de passe.',
              'Utilisez ce code dans {{url}}/recover-password?email={{to}}&token={{token}} ou cliquez sur le bouton ci-dessous.',
          ],
          'USER_INVITE' => [
              'You have been invited - River-Shako',
              'You have been invited',
               'Hi, {{name}}. You have been invited to join our support center.',
              'Use this code in {{url}}/recover-password?email={{to}}&token={{token}}&invited=true or click the button below to set up your password.'
          ],
          'USER_SYSTEM_DISABLED' => [
              'Système d\'accès modifié - River-Shako',
              'Système d\'accès modifié',
              'Bonjour, {{name}}.Le système d\'accès aux tickets a changé.',
              'Vous pouvez accéder et voir vos billets en utilisant votre email et le numéro de ticket.Cliquez sur le bouton ci-dessous pour voir vos billets.',
          ],
          'USER_SYSTEM_ENABLED' => [
              'Compte créé - River-Shako',
              'Compte créé',
              'Bonjour, {{name}}. Nous avons créé un compte où vous pouvez accéder aux billets que vous nous avez envoyés.',
              'Vous pouvez accéder à votre compte en utilisant ce courriel <i>({{to}})</i> et votre mot de passe ci-dessous.Veuillez modifier le mot de passe dès que vous vous connectez.',
          ],
          'TICKET_CREATED' => [
              '#{{ticketNumber}} Ticket créé - River-Shako',
              'Ticket créé',
              'Bonjour, {{name}}. Vous avez envoyé un nouveau ticket intitulé <i>{{title}}</i> à notre centre de support.',
              'Vous pouvez accéder au billet par son numéro de ticket. Ou vous pouvez cliquer sur le bouton ci-dessous.',
          ],
          'TICKET_RESPONDED' => [
              '#{{ticketNumber}} Nouvelle réponse - River-Shako',
              'Ticket répondu',
              'Bonjour, {{name}}. Vous avez reçu une réponse dans le titre du ticket <i>{{title}}</i>.',
              'Veuillez cliquer ci-dessous pour voir la nouvelle réponse.'
          ],
          'TICKET_CLOSED' => [
              '#{{ticketNumber}} Billet fermé - River-Shako',
              'Billet fermé',
              'Bonjour, {{name}}. Un billet que vous avez envoyé intitulé <i>{{title}}</i> a été fermé.',
              'Vous pouvez accéder au billet par son numéro de ticket. Ou vous pouvez cliquer sur le bouton ci-dessous.'
          ],
          'TICKET_CREATED_STAFF' => [
              '#{{ticketNumber}} Ticket créé - River-Shako',
              'Ticket créé',
              'L\'utilisateur {{name}}. a créé un nouveau poste intitulé <i>{{title}}</i>.',
              'Vous pouvez accéder au billet par son numéro de ticket.',
          ],
        ],
        'in' => [
          'USER_SIGNUP' => [
              'Daftar - River-Shako',
              'अपने खाते को सत्यापित करें',
              'हमारे समर्थन केंद्र में आपका स्वागत है {{name}}!. आपके खाते तक पहुंच प्राप्त करने के लिए हमें आपको यह ईमेल सत्यापित करने की आवश्यकता है।',
              'इस कोड का उपयोग करें {{url}}/verify-token/{{to}}/{{verificationToken}} या नीचे दिए गए बटन पर क्लिक करें।',
          ],
          'USER_PASSWORD' => [
              'sandi diedit - River-Shako',
              'संकेतशब्द परवर्तित',
              'नमस्ते {{name}}. हम आपको सूचित करना चाहते हैं कि आपका पासवर्ड आपके ग्राहक पैनल से बदल गया है।'
          ],
          'USER_EMAIL' => [
              'email diedit - River-Shako',
              'ईमेल बदल गया',
              'नमस्ते {{name}}। हम आपको सूचित करना चाहते हैं कि आपका ईमेल आपके ग्राहक पैनल से {{newemail}} में बदल गया है।'
          ],
          'PASSWORD_FORGOT' => [
              'memulihkan password - River-Shako',
              'गोपनीय शब्द पुन प्राप्त करे',
              'नमस्ते {{name}}. आपने अपना पासवर्ड पुनर्प्राप्त करने का अनुरोध किया है',
              'इस कोड का उपयोग करें {{url}}/recover-password?email={{to}}&token={{token}} या नीचे दिए गए बटन पर क्लिक करें.',
          ],
          'USER_INVITE' => [
              'आपको आमंत्रित किया गया है - River-Shako',
              'आपको आमंत्रित किया गया है',
              'नमस्ते, {{name}}. आपको हमारे सहायता केंद्र से जुड़ने के लिए आमंत्रित किया गया है.',
              'इस कोड का उपयोग करें {{url}}/recover-password?email={{to}}&token={{token}}&invited=true या अपना पासवर्ड सेट करने के लिए नीचे दिए गए बटन पर क्लिक करें.'
          ],
          'USER_SYSTEM_DISABLED' => [
              'sistem akses berubah - River-Shako',
              'एक्सेस सिस्टम बदल गया',
              'नमस्ते {{name}}. टिकट का उपयोग करने के लिए सिस्टम बदल गया है।',
              'आप अपने ईमेल और टिकट नंबर का उपयोग करके अपने टिकट तक पहुंच सकते हैं और देख सकते हैं।अपने टिकट देखने के लिए नीचे दिए गए बटन पर क्लिक करें।',
          ],
          'USER_SYSTEM_ENABLED' => [
              'Akun telah dibuat - River-Shako',
              'खाता बन गय',
              'नमस्ते {{name}}. हमने एक खाता बनाया है, जहां आप हमारे द्वारा भेजे गए टिकटों तक पहुंच सकते हैं।',
              'आप इस ईमेल <i>({{to}})</i> और नीचे दिए गए पासवर्ड का उपयोग करके अपने खाते का उपयोग कर सकते हैं।जैसे ही आप लॉग इन करते हैं, तभी पासवर्ड बदल दें।',
          ],
          'TICKET_CREATED' => [
              '#{{ticketNumber}} tiket dibuat - River-Shako',
              'टिकट बनाय',
              'नमस्ते {{name}}. आपने हमारे समर्थन केंद्र पर <i>{{title}}</i> नामक एक नया टिकट भेजा है.',
              'आप अपने टिकट नंबर से टिकट तक पहुंच सकते हैं। या आप नीचे दिए गए बटन पर क्लिक कर सकते हैं।',
          ],
          'TICKET_RESPONDED' => [
              '#{{ticketNumber}} tanggapan baru - River-Shako',
              'टिकट जवाब दिया',
              'नमस्ते {{name}}. आपको टिकट के शीर्षक में एक प्रतिक्रिया मिली है <i>{{title}}</i>.',
              'कृपया नया प्रतिसाद देखने के लिए नीचे क्लिक करें।'
          ],
          'TICKET_CLOSED' => [
              '#{{ticketNumber}} tiket ditutup - River-Shako',
              'Tiket ditutup',
              'नमस्ते {{name}}. आपके द्वारा लिखे गए टिकट <i>{{title}} </i> को बंद कर दिया गया है।',
              'आप अपने टिकट नंबर से टिकट तक पहुंच सकते हैं। या आप नीचे दिए गए बटन पर क्लिक कर सकते हैं।'
          ],
          'TICKET_CREATED_STAFF' => [
              '#{{ticketNumber}} tiket dibuat - River-Shako',
              'टिकट बनाया',
              'उपयोगकर्ता {{name}} हकदार एक नया पद बनाया गया है <i>{{title}}</i>.',
              'आप अपने टिकट नंबर से टिकट तक पहुंच सकते हैं।',
          ],
        ],
        'it' => [
          'USER_SIGNUP' => [
              'Sei iscritto {{to}} - River-Shako',
              'Verifica il tuo account',
              'Benvenuto, {{name}}!. Devi verificare questa email per accedere al tuo account.',
              'Clicca sul link {{url}}/verify-token/{{to}}/{{verificationToken}} o clicca sul pulsante qui sotto.',
          ],
          'USER_PASSWORD' => [
              'Password modificata - River-Shako',
              'Password modificata',
              'Ciao, {{name}}. Vogliamo informarti che la tua password è stata modificata dal tuo pannello di controllo.'
          ],
          'USER_EMAIL' => [
              'E-mail modificata - River-Shako',
              'L\'email è stata modificata',
              'Ciao, {{name}}. Vogliamo informarti che la tua email è stata modificata {{newemail}} dal tuo pannello di controllo.'
          ],
          'PASSWORD_FORGOT' => [
              'Recupera la password - River-Shako',
              'Recupera password',
              'Ciao, {{name}}. Hai richiesto di recuperare la tua password.',
              'Clicca sul link {{url}}/recover-password?email={{to}}&token={{token}} o clicca sul pulsante qui sotto.',
          ],
          'USER_INVITE' => [
              'Sei stato invitato - River-Shako',
              'Sei stato invitato',
              'Ciao, {{name}}. Sei stato invitato a far parte del nostro centro di supporto.',
              'Usa questo codice in {{url}}/recover-password?email={{to}}&token={{token}}&invited=true oppure fai clic sul pulsante in basso per impostare la password.'
          ],
          'USER_SYSTEM_DISABLED' => [
              'Il sistema di accesso è cambiato - River-Shako',
              'Modifica sistema di accesso',
              'Ciao, {{name}}. Il sistema di accesso ai tuoi tickets è cambiato.',
              'Puoi accedere ai tuoi ticket usando la tua email e il numero del ticket.Clicca sul bottone qui sotto per vedere i tuoi tickets.',
          ],
          'USER_SYSTEM_ENABLED' => [
              'Account creato - River-Shako',
              'Account creato',
              'Ciao, {{name}}. Abbiamo creato il tuo account.',
              ' Puoi accedere al tuo account utilizzando questa email <i>({{to}})</i> e la password qui sotto.Ti consigliamo di cambiare la password dopo il primo accesso.',
          ],
          'TICKET_CREATED' => [
              '#{{ticketNumber}} ticket creato - River-Shako',
              'Ticket inviato',
              'Ciao, {{name}}. Hai inviato un nuovo ticket <i>{{title}}</i> al nostro centro si assistenza.',
              'È possibile accedere al ticket attraverso il numero del ticket. Oppure puoi cliccare sul bottone qui sotto.',
          ],
          'TICKET_RESPONDED' => [
              '#{{ticketNumber}} Ticket risposto - River-Shako',
              'Risposta al tuo ticket',
              'Ciao, {{name}}. Hai ricevuto una risposta al tuo ticket <i>{{title}}</i>.',
              'Clicca qui sotto per leggere la risposta.'
          ],
          'TICKET_CLOSED' => [
              '#{{ticketNumber}} Ticket chiuso - River-Shako',
              'Ticket chiuso',
              'Ciao, {{name}}. Il ticket che hai inviato <i>{{title}}</i> è stato chiuso.',
              'È possibile accedere al ticket attraverso il numero del ticket. Oppure puoi cliccare sul bottone qui sotto.'
          ],
          'TICKET_CREATED_STAFF' => [
              '#{{ticketNumber}} Ticket creato - River-Shako',
              'Ticket inviato',
              'l\'utente {{name}} ha creato un nuovo titolo dal titolo <i>{{title}}</i>',
              'È possibile accedere al ticket con il suo numero di ticket.',
          ],
        ],
        'jp' => [
          'USER_SIGNUP' => [
              'サインアップ - River-Shako',
              'アカウントを確認する',
              'サポートセンターへようこそ, {{name}}!. アカウントにアクセスするには、このメールを確認する必要があります。',
              'でこのコードを使用 {{url}}/verify-token/{{to}}/{{verificationToken}} 下のボタンをクリックしてください.',
          ],
          'USER_PASSWORD' => [
              'パスワードの編集 - River-Shako',
              'パスワード変更済み',
              'こんにちは、{{name}}。 お客様のパスワードがお客様のパネルから変更されたことをお知らせいたします。'
          ],
          'USER_EMAIL' => [
              '電子メールを編集しました - River-Shako',
              'メールが変更されました',
              'こんにちは、{{name}}。 お客様のメールがお客様のパネルから{{newemail}}に変更されたことをお知らせいたします。'
          ],
          'PASSWORD_FORGOT' => [
              'パスワードを回復 - River-Shako',
              'パスワードを回復',
              'こんにちは、{{name}}。 パスワードの回復を要求しました。',
              'でこのコードを使用 {{url}}/recover-password?email={{to}}&token={{token}} 下のボタンをクリックしてください.',
          ],
          'USER_INVITE' => [
              '招待されました - River-Shako',
              '招待されました',
              'こんにちは, {{name}}. サポートセンターに招待されました.',
              'このコードを {{url}}/recover-password?email={{to}}&token={{token}}&invited=true または、下のボタンをクリックしてパスワードを設定します.'
          ],
          'USER_SYSTEM_DISABLED' => [
              'アクセスシステムが変更されました - River-Shako',
              'アクセスシステムが変更されました',
              'こんにちは、{{name}}。 チケットにアクセスするシステムが変更されました。',
              'あなたはあなたの電子メールとチケット番号を使ってチケットにアクセスして見ることができます。チケットを見るには、下のボタンをクリックしてください。',
          ],
          'USER_SYSTEM_ENABLED' => [
              'アカウントが作成されました - River-Shako',
              'アカウントが作成されました',
              'こんにちは、{{name}}。 あなたが送ったチケットにアクセスできるアカウントを作成しました。',
              '下記のメール<i>（{{to}}）</i>とパスワードを使用してアカウントにアクセスできます。ログインするとすぐにパスワードを変更してください。',
          ],
          'TICKET_CREATED' => [
              '#{{ticketNumber}} チケットが作成されました - River-Shako',
              'チケットが作成されました',
              'こんにちは、{{name}}。<i>{{title}}</i> という新しいチケットをサポートセンターにお送りしました。',
              'そのチケット番号でチケットにアクセスできます。 または、下のボタンをクリックしてください。',
          ],
          'TICKET_RESPONDED' => [
              '#{{ticketNumber}} 新しい応答 - River-Shako',
              'チケットが応答しました',
              'こんにちは、{{name}}。 あなたはチケットのタイトル <i>{{title}}</i>で回答を受け取りました。',
              '新しいレスポンスを見るには、下記をクリックしてください。'
          ],
          'TICKET_CLOSED' => [
              '#{{ticketNumber}} チケットが閉じられました - River-Shako',
              'チケットが閉じられました',
              'こんにちは、{{name}}。<i>{{title}}</i> というタイトルのチケットは閉鎖されました。',
              'そのチケット番号でチケットにアクセスできます。 または、下のボタンをクリックしてください。'
          ],
          'TICKET_CREATED_STAFF' => [
              '#{{ticketNumber}} チケットが作成されました - River-Shako',
              'チケットが作成されました',
              'ユーザーは {{name}} 彼は題した新しいチケットを作成しました <i>{{title}}</i>。',
              'そのチケット番号でチケットにアクセスできます。',
          ],
        ],
        'pt' => [
          'USER_SIGNUP' => [
              'Inscrever-se {{to}} - River-Shako',
              'Verifique sua conta',
              'Bem-vindo ao nosso centro de suporte, {{name}}!. Precisamos que você verifique este e-mail para acessar sua conta.',
              'Use este código em {{url}}/verify-token/{{to}}/{{verificationToken}} ou clique no botão abaixo.',
          ],
          'USER_PASSWORD' => [
              'Senha editada - River-Shako',
              'Senha alterada',
              'Olá, {{name}}. Queremos informá-lo de que sua senha foi alterada do seu painel de clientes.'
          ],
          'USER_EMAIL' => [
              'Email editado - River-Shako',
              'E-mail alterado',
              'Oi, {{name}}. Queremos informar que seu e-mail foi alterado para {{newemail}} do seu painel de clientes.'
          ],
          'PASSWORD_FORGOT' => [
              'Recuperar senha - River-Shako',
              'Recuperar senha',
              'Olá, {{name}}. Você solicitou a recuperação da sua senha.',
              'Use este código em {{url}}/recover-password?email={{to}}&token={{token}} ou clique no botão abaixo.',
          ],
          'USER_INVITE' => [
              'Você foi convidado - River-Shako',
              'Você foi convidado',
              'Oi, {{name}}. Você foi convidado a participar do nosso centro de suporte.',
              'Use este código em {{url}}/recover-password?email={{to}}&token={{token}}&invited=true ou clique no botão abaixo para configurar sua senha.'
          ],
          'USER_SYSTEM_DISABLED' => [
              'Sistema de acesso alterado - River-Shako',
              'Sistema de acesso alterado',
              'Oi, {{name}}. O sistema de acesso aos tickets mudou.',
              'Você pode acessar e ver seus bilhetes usando seu e-mail eo número do bilhete.Clique no botão abaixo para ver os seus bilhetes.',
          ],
          'USER_SYSTEM_ENABLED' => [
              'Conta criada - River-Shako',
              'Conta criada',
              'Oi, {{name}}. Criamos uma conta onde você pode acessar os ingressos que você nos enviou.',
              'Você pode acessar sua conta usando este e-mail <i>({{to}})</i> e a senha abaixo.Por favor, altere a senha assim que fizer login.',
          ],
          'TICKET_CREATED' => [
              '#{{ticketNumber}} Ticket criado - River-Shako',
              'Ticket criado',
              'Olá, {{name}}. Você enviou um novo ticket intitulado <i>{{title}}</i> para o nosso centro de suporte.',
              'Você pode acessar o bilhete pelo seu número de bilhete. Ou você pode clicar no botão abaixo.',
          ],
          'TICKET_RESPONDED' => [
              '#{{ticketNumber}} Nova resposta - River-Shako',
              'Ticket respondeu',
              'Olá, {{name}}. Recebeu uma resposta no título do bilhete <i>{{title}}</i>.',
              'Por favor, clique abaixo para ver a nova resposta.'
          ],
          'TICKET_CLOSED' => [
              '#{{ticketNumber}} Bilhete fechado - River-Shako',
              'Bilhete fechado',
              'Olá, {{name}}. Um bilhete que você enviou intitulado <i>{{title}}</i> foi fechado.',
              'Você pode acessar o bilhete pelo seu número de bilhete. Ou você pode clicar no botão abaixo.'
          ],
          'TICKET_CREATED_STAFF' => [
              '#{{ticketNumber}} Ticket criado - River-Shako',
              'Ticket criado',
              'O usuário {{name}} criou um novo bilhete de direito <i>{{title}}</i>.',
              'Você pode acessar o bilhete pelo seu número de bilhete.',
          ],
        ],
        'ru' => [
          'USER_SIGNUP' => [
              'Зарегистрироваться {{to}} - River-Shako',
              'подтвердите ваш аккаунт',
              'Добро пожаловать в наш центр поддержки, {{name}}!. Нам нужно, чтобы вы подтвердили это письмо, чтобы получить доступ к вашей учетной записи.',
              'Используйте этот код в {{url}}/verify-token/{{to}}/{{verificationToken}} или нажмите кнопку ниже.',
          ],
          'USER_PASSWORD' => [
              'Пароль изменен - River-Shako',
              'пароль изменен',
              'Здравствуй {{name}}. Мы хотим сообщить вам, что ваш пароль был изменен с вашей клиентской панели.'
          ],
          'USER_EMAIL' => [
              'Сообщение изменено - River-Shako',
              'Yout электронная почта изменена',
              'Здравствуй, {{name}}. Мы хотим сообщить вам, что ваше письмо было изменено на {{newemail}} с вашей панели клиентов.'
          ],
          'PASSWORD_FORGOT' => [
              'Восстановить пароль - River-Shako',
              'Восстановить пароль',
              'Здравствуй, {{name}}. Вы запросили восстановить пароль.',
              'Используйте этот код в {{url}}/recover-password?email={{to}}&token={{token}} или нажмите кнопку ниже.',
          ],
          'USER_INVITE' => [
              'Вы были приглашены - River-Shako',
              'Вы были приглашены',
              'Здравствуй, {{name}}. Вас пригласили присоединиться к нашему центру поддержки.',
              'Используйте этот код в {{url}}/recover-password?email={{to}}&token={{token}}&invited=true или нажмите кнопку ниже, чтобы установить пароль.'
          ],
          'USER_SYSTEM_DISABLED' => [
              'Система доступа изменена - River-Shako',
              'Система доступа изменена',
              'Здравствуйте, {{name}}. Система доступа к билетам изменилась.',
              'Вы можете получить доступ к своим билетам и посмотреть их, используя свою электронную почту и номер билета.Нажмите кнопку ниже, чтобы увидеть свои билеты.',
          ],
          'USER_SYSTEM_ENABLED' => [
              'Аккаунт создан - River-Shako',
              'Аккаунт создан',
              'Здравствуйте, {{name}}. Мы создали учетную запись, где вы можете получить доступ к билетам, которые вы нам отправили.',
              'Вы можете получить доступ к своей учетной записи, используя это электронное письмо <i>({{to}})</i> и пароль ниже.Измените пароль, как только вы войдете в систему.',
          ],
          'TICKET_CREATED' => [
              '#{{ticketNumber}} Создан билет - River-Shako',
              'Создан билет',
              'Здравствуйте, {{name}}. Вы отправили новый билет с названием <i>{{title}}</i> в наш центр поддержки.',
              'Вы можете получить доступ к билету по его номеру билета. Или вы можете нажать на кнопку ниже.',
          ],
          'TICKET_RESPONDED' => [
              '#{{ticketNumber}} Новый ответ - River-Shako',
              'Отправлен билет',
              'Здравствуйте, {{name}}. Вы получили ответ в названии билета <i>{{title}}</i>.',
              'Нажмите ниже, чтобы увидеть новый ответ.'
          ],
          'TICKET_CLOSED' => [
              '#{{ticketNumber}} Билет закрыт - River-Shako',
              'Билет закрыт',
              'Здравствуйте, {{name}}. Билет, который вы отправили под названием <i>{{title}}</i>, был закрыт.',
              'Вы можете получить доступ к билету по его номеру билета. Или вы можете нажать на кнопку ниже.'
          ],
          'TICKET_CREATED_STAFF' => [
              '#{{ticketNumber}} Создан билет - River-Shako',
              'Создан билет',
              'Пользователь {{name}} создал новый билет под названием <i>{{title}}</i>.',
              'Вы можете получить доступ к билету по его номеру билета.',
          ],
        ],
        'tr' => [
          'USER_SIGNUP' => [
              'kaydol {{to}} - River-Shako',
              'Hesabınızı doğrulayın',
              'Destek merkezimize hoş geldiniz, {{name}}!. Hesabınıza erişebilmek için bu e-postayı doğrulamanız gerekiyor.',
              'Bu kodu şu adreste kullanın {{url}}/verify-token/{{to}}/{{verificationToken}} veya aşağıdaki butona tıklayın.',
          ],
          'USER_PASSWORD' => [
              'Şifre düzenlendi - River-Shako',
              'şifre değişti',
              'Merhaba, {{name}}. Şifrenizin müşteri panelinizden değiştirildiğini size bildirmek istiyoruz.'
          ],
          'USER_EMAIL' => [
              'E-posta düzenlendi - River-Shako',
              'E-posta değişti',
              'Merhaba, {{name}}. E-postanızın müşteri panelinizden {{newemail}} olarak değiştiğini bildirmek istiyoruz.'
          ],
          'PASSWORD_FORGOT' => [
              'Şifre kurtarma - River-Shako',
              'Şifre kurtarma',
              'Merhaba, {{name}}. Şifrenizi geri yüklemenizi istediniz.',
              'Bu kodu şu adreste kullanın {{url}}/recover-password?email={{to}}&token={{token}} veya aşağıdaki butona tıklayın.',
          ],
          'USER_INVITE' => [
              'Davet edildin - River-Shako',
              'Davet edildin',
              'Merhaba, {{name}}. Destek merkezimize katılmaya davet edildiniz.',
              'Bu kodu {{url}}/recover-password?email={{to}}&token={{token}}&invited=true veya şifrenizi ayarlamak için aşağıdaki butona tıklayın.'
          ],
          'USER_SYSTEM_DISABLED' => [
              'Erişim sistemi değiştirildi - River-Shako',
              'Erişim sistemi değiştirildi',
              'Merhaba, {{name}}. Biletleri erişmek için sistem değişti.',
              'E-posta adresinizi ve bilet numaranızı kullanarak biletinize erişebilir ve biletlerini görebilirsiniz.Biletlerini görmek için aşağıdaki butona tıklayın.',
          ],
          'USER_SYSTEM_ENABLED' => [
              'Hesap oluşturuldu - River-Shako',
              'Hesap oluşturuldu',
              'Merhaba, {{name}}. Bize gönderdiğiniz bilete erişebileceğiniz bir hesap oluşturduk.',
              'Hesabınıza, <i>({{to}})</i> e-posta adresini kullanarak ve aşağıdaki şifreyle erişebilirsiniz.Lütfen giriş yaptığınızda şifreyi değiştirin.',
          ],
          'TICKET_CREATED' => [
              '#{{ticketNumber}} Bilet oluşturuldu - River-Shako',
              'Bilet oluşturuldu',
              'Merhaba, {{name}}. Destek merkezimize <i>{{title}}</i> başlıklı yeni bir bilet gönderdiniz.',
              'Bilete bilet numarasından erişebilirsiniz. Ya da aşağıdaki düğmeyi tıklayabilirsiniz.',
          ],
          'TICKET_RESPONDED' => [
              '#{{ticketNumber}} Yeni yanıt - River-Shako',
              'Bilet yanıtladı',
              'Merhaba, {{name}}. <i>{{title}}</i> başlıklı biletten bir cevap aldınız.',
              'Yeni yanıtı görmek için lütfen aşağıya tıklayınız.'
          ],
          'TICKET_CLOSED' => [
              '#{{ticketNumber}} Bilet kapalı - River-Shako',
              'Bilet kapandı',
              'Merhaba, {{name}}. Başlık gönderdiğiniz bir bilet <i>{{title}}</i> kapatıldı.',
              'Bilete bilet numarasından erişebilirsiniz. Ya da aşağıdaki düğmeyi tıklayabilirsiniz.'
          ],
          'TICKET_CREATED_STAFF' => [
              '#{{ticketNumber}} Bilet oluşturuldu - River-Shako',
              'Bilet oluşturuldu',
              'Kullanıcı {{name}} başlıklı yeni bir bilet yarattı <i>{{title}}</i> .',
              'Bilete bilet numarasından erişebilirsiniz.',
          ],
        ],
        'br' => [
          'USER_SIGNUP' => [
              'Inscrever-se {{to}} - River-Shako',
              'Verifique sua conta',
              'Bem-vindo ao nosso centro de suporte, {{name}}!. Precisamos que você verifique este e-mail para acessar sua conta.',
              'Use este código em {{url}}/verify-token/{{to}}/{{verificationToken}} ou clique no botão abaixo.',
          ],
          'USER_PASSWORD' => [
              'Senha editada - River-Shako',
              'Senha alterada',
              'Olá, {{name}}. Queremos informá-lo de que sua senha foi alterada do seu painel de clientes.'
          ],
          'USER_EMAIL' => [
              'Email editado - River-Shako',
              'E-mail alterado',
              'Oi, {{name}}. Queremos informar que seu e-mail foi alterado para {{newemail}} do seu painel de clientes.'
          ],
          'PASSWORD_FORGOT' => [
              'Recuperar senha - River-Shako',
              'Recuperar senha',
              'Olá, {{name}}. Você solicitou a recuperação da sua senha.',
              'Use este código em {{url}}/recover-password?email={{to}}&token={{token}} ou clique no botão abaixo.',
          ],
          'USER_INVITE' => [
              'Você foi convidado - River-Shako',
              'Você foi convidado',
              'Oi, {{name}}. Você foi convidado a participar do nosso centro de suporte.',
              'Use este código em {{url}}/recover-password?email={{to}}&token={{token}}&invited=true ou clique no botão abaixo para configurar sua senha.'
          ],
          'USER_SYSTEM_DISABLED' => [
              'Sistema de acesso alterado - River-Shako',
              'Sistema de acesso alterado',
              'Oi, {{name}}. O sistema de acesso aos tickets mudou.',
              'Você pode acessar e ver seus bilhetes usando seu e-mail eo número do bilhete.Clique no botão abaixo para ver os seus bilhetes.',
          ],
          'USER_SYSTEM_ENABLED' => [
              'Conta criada - River-Shako',
              'Conta criada',
              'Oi, {{name}}. Criamos uma conta onde você pode acessar os ingressos que você nos enviou.',
              'Você pode acessar sua conta usando este e-mail <i>({{to}})</i> e a senha abaixo.Por favor, altere a senha assim que fizer login.',
          ],
          'TICKET_CREATED' => [
              '#{{ticketNumber}} Ticket criado - River-Shako',
              'Ticket criado',
              'Olá, {{name}}. Você enviou um novo ticket intitulado <i>{{title}}</i> para o nosso centro de suporte.',
              'Você pode acessar o bilhete pelo seu número de bilhete. Ou você pode clicar no botão abaixo.',
          ],
          'TICKET_RESPONDED' => [
              '#{{ticketNumber}} Nova resposta - River-Shako',
              'Ticket respondeu',
              'Olá, {{name}}. Recebeu uma resposta no título do bilhete <i>{{title}}</i>.',
              'Por favor, clique abaixo para ver a nova resposta.'
          ],
          'TICKET_CLOSED' => [
              '#{{ticketNumber}} Bilhete fechado - River-Shako',
              'Bilhete fechado',
              'Olá, {{name}}. Um bilhete que você enviou intitulado <i>{{title}}</i> foi fechado.',
              'Você pode acessar o bilhete pelo seu número de bilhete. Ou você pode clicar no botão abaixo.'
          ],
          'TICKET_CREATED_STAFF' => [
              '#{{ticketNumber}} Ticket criado - River-Shako',
              'Ticket criado',
              'O usuário {{name}} criou um novo bilhete de direito <i>{{title}}</i>.',
              'Você pode acessar o bilhete pelo seu número de bilhete.',
          ],
        ],
        'gr' => [
          'USER_SIGNUP' => [
              'Εγγραφή {{to}} - River-Shako',
              'Επιβεβαιώστε το λογαριασμό σας',
              'Καλώς ήρθατε στο κέντρο υποστήριξης {{name}} !. Πρέπει να επαληθεύσετε αυτό το μήνυμα ηλεκτρονικού ταχυδρομείου για να αποκτήσετε πρόσβαση στο λογαριασμό σας.',
              'Χρησιμοποιήστε αυτόν τον κωδικό στο {{url}}/verify-token/{{to}}/{{verificationToken}} ή κάντε κλικ στο παρακάτω κουμπί.',
          ],
          'USER_PASSWORD' => [
              'Ο κωδικός επεξεργασίας τροποποιήθηκε- River-Shako',
              'Ο κωδικός άλλαξε',
              'Γεια σου, {{name}}. Θέλουμε να σας ενημερώσουμε ότι ο κωδικός πρόσβασής σας έχει αλλάξει από τον πίνακα πελατών σας.'
          ],
          'USER_EMAIL' => [
              'Email επεξεργασμένο - River-Shako',
              'Το ηλεκτρονικό ταχυδρομείο άλλαξε',
              'Γεια σου, {{name}}. Θέλουμε να σας ενημερώσουμε ότι το email σας έχει αλλάξει σε {{newemail}} από την ομάδα πελατών σας.'
          ],
          'PASSWORD_FORGOT' => [
              'Ανάκτηση κωδικού πρόσβασης - River-Shako',
              'Ανάκτηση κωδικού πρόσβασης',
              'Γεια σου, {{name}}. Ζητήσατε να ανακτήσετε τον κωδικό πρόσβασής σας.',
              'Χρησιμοποιήστε αυτόν τον κωδικό στο {{url}} / recover-password? Email = {{to}} & token = {{token}} ή κάντε κλικ στο παρακάτω κουμπί.',
          ],
          'USER_INVITE' => [
              'Έχετε προσκληθεί - River-Shako',
              'Έχετε προσκληθεί',
              'Γεια σου, {{name}}. Έχετε προσκληθεί να συμμετάσχετε στο κέντρο υποστήριξής μας.',
              'Χρησιμοποιήστε αυτόν τον κωδικό στο {{url}}/recover-password?email={{to}}&token={{token}}&invited=true ή κάντε κλικ στο παρακάτω κουμπί για να ρυθμίσετε τον κωδικό πρόσβασής σας.'
          ],
          'USER_SYSTEM_DISABLED' => [
            'Το σύστημα πρόσβασης άλλαξε - River-Shako',
            'Το σύστημα πρόσβασης άλλαξε',
            '«Γεια σας, {{name}}. Το σύστημα πρόσβασης στα εισιτήρια έχει αλλάξει. ',
            'Μπορείτε να έχετε πρόσβαση και να δείτε τα εισιτήριά σας χρησιμοποιώντας το email σας και τον αριθμό του εισιτηρίου.Κάντε κλικ στο κουμπί παρακάτω για να δείτε τα εισιτήριά σας.',
          ],
          'USER_SYSTEM_ENABLED' => [
            'Δημιουργία λογαριασμού - River-Shako',
            'Λογαριασμός που δημιουργήθηκε',
            '«Γεια σας, {{name}}. Δημιουργήσαμε ένα λογαριασμό στον οποίο μπορείτε να έχετε πρόσβαση στα εισιτήρια που μας έχετε στείλει. ',
            'Μπορείτε να αποκτήσετε πρόσβαση στο λογαριασμό σας χρησιμοποιώντας αυτό το μήνυμα ηλεκτρονικού ταχυδρομείου <i> ({{to}}) </ i> και τον κωδικό πρόσβασης παρακάτω.Παρακαλώ αλλάξτε τον κωδικό πρόσβασης μόλις συνδεθείτε.',
          ],
          'TICKET_CREATED' => [
              '#{{ticketNumber}} Δημιουργήθηκε εισιτήριο - River-Shako',
              'Δημιουργήθηκε εισιτήριο',
              'Χαίρετε, {{name}}.Έχετε στείλει ένα νέο εισιτήριο με τίτλο <i> {{title}} </ i> στο κέντρο υποστήριξης.',
              'Μπορείτε να έχετε πρόσβαση στο εισιτήριο με τον αριθμό εισιτηρίου του ή μπορείτε να κάνετε κλικ στο παρακάτω κουμπί.',
          ],
          'TICKET_RESPONDED' => [
              '#{{ticketNumber}} Νέα απάντηση- River-Shako',
              'Reactie op incident ',
              'Hallo, {{name}}. Er is een reactie geplaats bij het incident met onderwerp <i>{{title}}</i>.',
              'Klik hieronder om de reactie te bekijken.'
          ],
          'TICKET_CLOSED' => [
             '#{{ticketNumber}} Το εισιτήριο έκλεισε - River-Shako',
              'Το εισιτήριο έκλεισε',
              'Χαίρετε, {{name}}.Ένα εισιτήριο που έχετε στείλει με τον τίτλο <i> {{title}} </ i> έχει κλείσει.',
              'Μπορείτε να έχετε πρόσβαση στο εισιτήριο με τον αριθμό εισιτηρίου του. Ή μπορείτε να κάνετε κλικ στο παρακάτω κουμπί.'
          ],
          'TICKET_CREATED_STAFF' => [
              '#{{ticketNumber}} Δημιουργήθηκε εισιτήριο- River-Shako',
              'Incident aangemaakt',
              'Gebruiker {{name}} heeft een nieuw incident aangemaakt met onderwerp <i>{{title}}</i>.',
              'Bekijk dit incident via het incidentnummer.',
          ],
        ],
        'nl' => [
          'USER_SIGNUP' => [
              'Aanmelden {{to}} - River-Shako',
              'Verifieer uw account',
              'Welkom bij het Support Center, {{name}}!. U moet uw account verifiëren om toegang te krijgen tot het systeem.',
              'Use this code in {{url}}/verify-token/{{to}}/{{verificationToken}} or click the button below.',
          ],
          'USER_PASSWORD' => [
              'Wachtwoord is aangepast - River-Shako',
              'Wachtwoord is gewijzigd',
              'Hallo, {{name}}. Uw wachtwoord is gewijzigd voor het klantenportaal.'
          ],
          'USER_EMAIL' => [
              'E-mailadres is aangepast - River-Shako',
              'Email adres gewijzigd',
              'Hallo, {{name}}. Uw email adres is gewijzigd naar {{newemail}} in het klantenportaal.'
          ],
          'PASSWORD_FORGOT' => [
              'Herstel wachtwoord - River-Shako',
              'Reset wachtwoord',
              'Hallo, {{name}}. U heeft een verzoek gedaan om uw wachtwoord te resetten.',
              'Gebruik deze code {{url}}/recover-password?email={{to}}&token={{token}} of klik op de knop hieronder.'
          ],
          'USER_INVITE' => [
              'Je bent uitgenodigd - River-Shako',
              'Je bent uitgenodigd',
              'Hallo, {{name}}. U bent uitgenodigd om lid te worden van ons ondersteuningscentrum.',
              'Gebruik deze code in {{url}}/recover-password?email={{to}}&token={{token}}&invited=true of klik op de onderstaande knop om uw wachtwoord in te stellen.'
          ],
          'USER_SYSTEM_DISABLED' => [
            'Toegangssysteem gewijzigd - River-Shako',
            'Toegang tot incidenten is gewijzigd',
            'Hallo, {{name}}. De toegang tot incidenten is gewijzigd.',
            'U kunt uw incidenten bekijken d.m.v. uw email en het incident nummer.Klik op de knop hieronder om uw tickets te bekijken.',
          ],
          'USER_SYSTEM_ENABLED' => [
            'Account is aangemaakt - River-Shako',
            'Account Aangemaakt',
            'Hallo, {{name}}. We hebben een account voor u aangemaakt waarmee u uw incidenten kunt bekijken.',
            'U kunt inloggen met dit email adres <i>({{to}})</i> en onderstaande wachtwoord.Verander alstublieft het wachtwoord na het inloggen.',
          ],
          'TICKET_CREATED' => [
              '#{{ticketNumber}} Incident aangemaakt - River-Shako',
              'Incident aangemaakt',
              'Hallo, {{name}}. U heeft zojuist een incident aangemaakt met onderwerp <i>{{title}}</i> in ons support center.',
              'U kunt dit incident bekijken via het incidentnummer of via de knop hieronder.',
          ],
          'TICKET_RESPONDED' => [
              '#{{ticketNumber}} Nieuw antwoord - River-Shako',
              'Nieuw antwoord',
              'Hallo, {{name}}. Een incident met onderwerp <i>{{title}}</i> heeft eeb nieuw antwoord.',
              'U kunt dit incident bekijken via het incidentnummer. Of klik op de knop hieronder.'
          ],
          'TICKET_CLOSED' => [
             '#{{ticketNumber}} Incident gesloten - River-Shako',
              'Incident is gesloten',
              'Hallo, {{name}}. Een incident met onderwerp <i>{{title}}</i> is gesloten.',
              'U kunt dit incident bekijken via het incidentnummer. Of klik op de knop hieronder.'
          ],
          'TICKET_CREATED_STAFF' => [
              '#{{ticketNumber}} Incident aangemaakt - River-Shako',
              'Incident is gesloten',
              'Hallo, {{name}}. Een incident met onderwerp <i>{{title}}</i> is gesloten.',
              'U kunt dit incident bekijken via het incidentnummer. Of klik op de knop hieronder.',
          ],
        ],
        'pl' => [
          'USER_SIGNUP' => [
              'Signup {{to}} - River-Shako',
              'Zweryfikuj swoje konto',
              'Witamy w naszym centrum pomocy, {{name}}!. Musisz zweryfikować tego maila, aby uzyskać dostęp do swojego konta.',
              'Użyj kodu weryfikacyjnego{{url}}/tokena weryfikacji/{{to}}/{{verificationToken}} lub kliknij przycisk poniżej.',
          ],
          'USER_PASSWORD' => [
              'Edycja hasła - River-Shako',
              'Hasło zostało zmienione',
              'Hej, {{name}}. Twoje hasło zostało zmienione w panelu Klienta.'
          ],
          'USER_EMAIL' => [
              'Edycja e-mail - River-Shako',
              'Mail został zmieniony',
              'Hej, {{name}}. Twój adres e-mail został zmieniony na {{newemail}} w panelu Klienta.'
          ],
          'PASSWORD_FORGOT' => [
              'Odzyskaj hasło - River-Shako',
              'Hasło odzyskane',
              'Hej, {{name}}. Zażądałeś odzyskania hasła.',
              'Użyj tego linka {{url}}/recover-password?email={{to}}&token={{token}} lub kliknij przycisk poniżej.',
          ],
          'USER_INVITE' => [
              'Zostałeś zaproszony - River-Shako',
              'Zostałeś zaproszony',
              'Hej, {{name}}. Zaproszono Cię do dołączenia do naszego centrum wsparcia.',
              'Użyj tego kodu w {{url}}/recover-password?email={{to}}&token={{token}}&invited=true lub kliknij przycisk poniżej, aby ustawić hasło.'
          ],
          'USER_SYSTEM_DISABLED' => [
              'Zmieniono dostęp do systemu - River-Shako',
              'Zmieniono dostęp do systemu',
              'Hello, {{name}}. System dostępu do zgłoszeń uległ zmianie',
              'Możesz uzyskać dostęp do swoich zgoszeń i sprawdzić je, używając adresu e-mail i numeru zgłoszenia. Kliknij poniższy przyciś, aby zobaczyć swoje zgłoszenia.',
          ],
          'USER_SYSTEM_ENABLED' => [
              'Twporzenie konta - River-Shako',
              'Konto zostało utworzone',
              'Hello, {{name}}. Stworzyliśmy konto, na którym możesz uzyskać dostęp do wysłanych przez Ciebie zgłoszeń.',
              'Możesz uzyskać dostęp do swojego konta za pomocą tego e-maila <i>({{to}})</i> i hasła poniżej. Zmień hasło zaraz po zalogowaniu',
          ],
          'TICKET_CREATED' => [
              '#{{ticketNumber}} Tworzenie zgłoszenia - River-Shako',
              'Zgłoszenie utworzono',
              'Hello, {{name}}. Wysłałeś nowe zgłoszenie zatytułowane <i>{{title}}</i> do naszego centrum pomocy.',
              'Możesz uzyskać dostęp do zgłoszenia poprzez jego numer lub kliknij w przycisk poniżej.',
          ],
          'TICKET_RESPONDED' => [
              '#{{ticketNumber}} Nowa odpowiedź - River-Shako',
              'Odpowiedź na zgłoszenie',
              'Hello, {{name}}. Otrzymałeś odpowiedź na zgłoszenie zatytułowane <i>{{title}}</i>.',
              'Kliknij poniżej, aby zobaczyć nową odpowiedź.'
          ],
          'TICKET_CLOSED' => [
             '#{{ticketNumber}} Zamknięcie zgłoszenia - River-Shako',
              'Zgłoszenie zamknięto',
              'Hello, {{name}}. Zgłoszenie pod tytułem <i>{{title}}</i> zostało zamknięte.',
              'Możesz uzyskać dostęp do zgłoszenia poprzez jego numer lub kliknij w przycisk poniżej.'
          ],
          'TICKET_CREATED_STAFF' => [
              '#{{ticketNumber}} Utworzono zgłoszenie - River-Shako',
              'Zgłoszenie utworzono',
              'Użytkownik {{name}} utworzył nowe zgłoszenie pod tytułem <i>{{title}}</i>.',
              'Możesz uzyskać dostęp do zgłoszenia po jego numerze.',
          ],
        ],
    ];
  }
}
