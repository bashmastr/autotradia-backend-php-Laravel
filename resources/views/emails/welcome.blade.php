

@include('emails.header')


              <tr>
                <td align="center" class="sm-px-24" style="font-family: 'Montserrat',Arial,sans-serif;">
                  <table style="font-family: 'Montserrat',Arial,sans-serif; width: 100%;  min-width: 859px; " width="100%" cellpadding="0" cellspacing="0" role="presentation">
        
                  
                  <tr>
                      <td class="sm-px-24" style="--bg-opacity: 1; background-color: #ffffff; background-color: rgba(255, 255, 255, var(--bg-opacity)); border-radius: 4px; font-family: Montserrat, -apple-system, 'Segoe UI', sans-serif; font-size: 14px; line-height: 24px; padding: 48px; text-align: left; --text-opacity: 1; color: #626262; color: rgba(98, 98, 98, var(--text-opacity));" bgcolor="rgba(255, 255, 255, var(--bg-opacity))" align="left">
                        <p style="font-weight: 600; font-size: 18px; margin-bottom: 0;">Hey</p>
                        <p style="font-weight: 700; font-size: 20px; margin-top: 0; --text-opacity: 1; color: #ff5850; color: rgba(255, 88, 80, var(--text-opacity));">{{$data['user']['name']}}</p>
                        <p class="sm-leading-32" style="font-weight: 600; font-size: 20px; margin: 0 0 24px; --text-opacity: 1; color: #263238; color: rgba(38, 50, 56, var(--text-opacity));">
                        🤩 Welcome To Auto Tradia!!
                        </p>


                        <a href="https://1.envato.market/vuexy_admin">
                          <img src="{{asset('images/email/welcome.jpg')}}" width="230" height= "250" alt="Vuexy Admin" style="border: 0; max-width: 100%; line-height: 70%; text-align: center;  display: block; margin-left: auto; margin-right: auto; width: 50%; ">
                        </a>
                        
                     
                        <p style="margin: 24px 0;">
                          <span style="font-weight: 600;">Autotradia</span>
                          is the most developer friendly & highly customisable website for car lovers. You can easily buy and sell here without any hassle.
                        </p>

                        <p style="margin: 24px 0;">
                          <span style="font-weight: 600;">Your Account Details</span> <br> 
                          <span style="font-weight: 600;"> Username/Email: </span> {{$data['user']['email']}} <br>
                          <span style="font-weight: 600;"> Password: </span> {{$data['password']}}
                        </p>



                        <p style="font-weight: 500; font-size: 16px; margin-bottom: 0;">How can you use Autotradia Platform?</p>
                        <ul style="margin-bottom: 24px;">
                          <li>
                            Start Exploring 🚀 your choice cars in your city. exploring is free we dont charge. Even you can create free account and starting 
                            exploring many different options such as wishlist etc.
                          </li>
                          <li>
                           If you want to sell your car we have the best and huge customer base to reach your ad to them for free.
                           however you can purchase our AD featured packages.
                          </li>

                          <li>
                           Again, Welcome on board. we hope you will enjoy and experience the best!!! Take care 
                          </li>
                        </ul>
                        <table style="font-family: 'Montserrat',Arial,sans-serif;" cellpadding="0" cellspacing="0" role="presentation">
                          <tr>
                            <td style="mso-padding-alt: 16px 24px; --bg-opacity: 1; background-color: #7367f0; background-color: rgba(115, 103, 240, var(--bg-opacity)); border-radius: 4px; font-family: Montserrat, -apple-system, 'Segoe UI', sans-serif;" bgcolor="rgba(115, 103, 240, var(--bg-opacity))">
                              <a href="https://example.com" style="display: block; font-weight: 600; font-size: 14px; line-height: 100%; padding: 16px 24px; --text-opacity: 1; color: #ffffff; color: rgba(255, 255, 255, var(--text-opacity)); text-decoration: none;">Visit Profile &rarr;</a>
                            </td>
                          </tr>
                        </table>
               
          
@include('emails.footer')