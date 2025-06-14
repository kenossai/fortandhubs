@component('mail::message')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $message->subject }}</title>
</head>
<body>
   <div style="font-family:'Open Sans',Arial,Helvetica,sans-serif;">
  <table style="display:block; width:100%; max-width:640px; font-size: 0.9em; color:#222" border="0" align="center" cellpadding="20" cellspacing="0">
    <tbody>
      <tr>
        <td><img alt="" width="150" src="https://uploads-ssl.webflow.com/5f7ff6481e70fb5cb392edff/62ebf0d752527c52a3feb42b_2021-4C-Black-Horizontal.png"></td>
      </tr>
      <tr>
        <td style="font-weight: 800; color:#0c4873">Hello , {{ $message->name }}</td>
      </tr>
      <tr>
        <td>
          <p>Thank you for reaching out to us!<br>
            {{ $message->reply }}.</p>
          <p>You may refer to our <u><strong><a href="https://www.propertygiant.com/faq" target="_blank" style="color: black">FAQs</a></strong></u> for more information.</p>
          <p>For any urgent matters, please call our sales hotline at <strong><a href="tel:+65610061999" style="color: black">(65) 6100 6199</a></strong>. Or WhatsApp us directly at <strong><a href="https://wa.me/6588080788" style="color: black">(65) 8808 0788</a></strong>.</p>
        </td>
      </tr>

      <tr>
        <td>
          <p>Cheers,<br>
            <strong>{{ config('app.name') }}</strong>
          </p>
        </td>
      </tr>
      <tr style="background-color:#222;">
        <td>
          <table style="color:#AAA; width:100%; text-align: center; font-size: 0.7em; line-height: 2em;">
            <tr>
              <td>
                <table style="align-items: center;">
                  <tr>
                    <td style="padding:0 10px;"><a alt="" href="https://www.facebook.com/PropertyGiantSG/"><img width="30px" src="https://uploads-ssl.webflow.com/5f7ff6481e70fb5cb392edff/5fa00f33487f7470b4fa17cf_facebook-icon.png"></a></td>
                    <td style="padding:0 10px;"><a alt="" href="https://www.instagram.com/propertygiantsg/"><img width="30px" src="https://uploads-ssl.webflow.com/5f7ff6481e70fb5cb392edff/5fa00f33a0d3d981bb618b14_insta-icon.png"></a></td>
                    <td style="padding:0 10px;"><a alt="" href="https://www.youtube.com/c/propertygiantsingapore"><img width="30px" src="https://uploads-ssl.webflow.com/5f7ff6481e70fb5cb392edff/5fa00f33144d25fc9f0f788a_youtube-icon.png"></a></td>
                  </tr>
                </table>
              </td>
            </tr>
            <tr>
              <td>
                <p>propertygiant.com<br>
                  <a href="tel:+65610061999" style="color: goldenrod">6100 6199</a><br>
                  18 Waringin Park, Singapore 416331<br>© 2022 Property Giant Singapore
                </p>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </tbody>
  </table>
</div>
</body>
</html>
