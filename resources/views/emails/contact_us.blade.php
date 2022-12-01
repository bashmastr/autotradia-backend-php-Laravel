
@include('emails.header')

 
              <tr>
                <td align="center" class="sm-px-24" style="font-family: 'Montserrat',Arial,sans-serif;">
                  <table style="font-family: 'Montserrat',Arial,sans-serif; width: 100%; min-width: 859px;" width="100%" cellpadding="0" cellspacing="0" role="presentation">
                    <tr>
                      <td class="sm-px-24" style="--bg-opacity: 1; background-color: #ffffff; background-color: rgba(255, 255, 255, var(--bg-opacity)); border-radius: 4px; font-family: Montserrat, -apple-system, 'Segoe UI', sans-serif; font-size: 14px; line-height: 24px; padding: 48px; text-align: left; --text-opacity: 1; color: #626262; color: rgba(98, 98, 98, var(--text-opacity));" bgcolor="rgba(255, 255, 255, var(--bg-opacity))" align="left">
                        <p style="font-weight: 600; font-size: 18px; margin-bottom: 0;">Hey</p>
                        <p style="font-weight: 700; font-size: 20px; margin-top: 0; --text-opacity: 1; color: #ff5850; color: rgba(255, 88, 80, var(--text-opacity));">Admin!</p>
                        <p class="sm-leading-32" style="font-weight: 600; font-size: 20px; margin: 0 0 16px; --text-opacity: 1; color: #263238; color: rgba(38, 50, 56, var(--text-opacity));">
                         Someone Has Sent You A Message Via Contact Form ✋
                        </p>

                        <a href="https://1.envato.market/vuexy_admin">
                          <img src="{{asset('images/email/contact-message.jpg')}}" width="230" height= "290" alt="Vuexy Admin" style="border: 0; max-width: 100%; line-height: 70%; text-align: center;  display: block; margin-left: auto; margin-right: auto; width: 50%; ">
                        </a>


                        <p>Please Find the below details here in this email:</p>
                        <ul style="margin-bottom: 24px;">
                          <li> <span style="font-weight: 600;">Subject :  </span>  {{$data['subject']}} </li>
                          <li> <span style="font-weight: 600;">User Name: </span> {{$data['name']}} </li>
                          <li> <span style="font-weight: 600;">User Email: </span> {{$data['email']}}</li>
                          <li> <span style="font-weight: 600;"> User Phone: </span>  {{$data['phone']}}</li>

                          <li> <span style="font-weight: 600;">Comment/Message: </span>  <br>  {{$data['message']}} </li>
                        </ul>
                        <p style="margin: 0;">
                        The above email is been sent from the website www.autotradia.com via contact form.
                          <a href="mailto:support@example.com" class="hover-underline" style="--text-opacity: 1; color: #7367f0; color: rgba(115, 103, 240, var(--text-opacity)); text-decoration: none;">support@example.com</a>
                        </p>
                         

         
@include('emails.footer')