@include('emails.header')

 
                <td align="center" class="sm-px-24" style="font-family: 'Montserrat',Arial,sans-serif;">
                  <table style="font-family: 'Montserrat',Arial,sans-serif; width: 100%; min-width: 859px;" width="100%" cellpadding="0" cellspacing="0" role="presentation">
                    <tr>
                      <td class="sm-px-24" style="--bg-opacity: 1; background-color: #ffffff; background-color: rgba(255, 255, 255, var(--bg-opacity)); border-radius: 4px; font-family: Montserrat, -apple-system, 'Segoe UI', sans-serif; font-size: 14px; line-height: 24px; padding: 48px; text-align: left; --text-opacity: 1; color: #626262; color: rgba(98, 98, 98, var(--text-opacity));" bgcolor="rgba(255, 255, 255, var(--bg-opacity))" align="left">
                        <p style="font-weight: 600; font-size: 18px; margin-bottom: 0;">Hey</p>
                        <p style="font-weight: 700; font-size: 20px; margin-top: 0; --text-opacity: 1; color: #ff5850; color: rgba(255, 88, 80, var(--text-opacity));"> {{$data['user_name']}}</p>
                        <p style="margin: 0 0 24px;">
                        👏 Thanks requesting our service, we have received your request with your given information and our team will contact you shortly once your request has been reviewed. Thank you for your patience
                        </p>

                        <a href="https://1.envato.market/vuexy_admin">
                          <img src="{{asset('images/email/form-submitted.jpg')}}" width="230" height= "330" alt="Vuexy Admin" style="border: 0; max-width: 100%; line-height: 70%; text-align: center;  display: block; margin-left: auto; margin-right: auto; width: 50%; ">
                        </a>



                        <table style="font-family: 'Montserrat',Arial,sans-serif; width: 100%;" width="100%" cellpadding="0" cellspacing="0" role="presentation">
                          <tr>
                            <td style="font-family: 'Montserrat',Arial,sans-serif; font-size: 14px;  ">
                              <table style="font-family: 'Montserrat',Arial,sans-serif; width: 100%;" width="100%" cellpadding="0" cellspacing="0" role="presentation">
                                <tr>
                                  <td style="font-family: 'Montserrat',Arial,sans-serif; font-size: 14px;"><strong>Submitted Date:</strong>  {{$data['submit_date']}} </td>
                                </tr>

 
                             
                              </table>
                            </td>
                          </tr>
                        </table>
                        <table style="font-family: 'Montserrat',Arial,sans-serif; width: 100%;" width="100%" cellpadding="0" cellspacing="0" role="presentation">
                   
                          <tr>
                            <td colspan="2" style="font-family: 'Montserrat',Arial,sans-serif;">
                              <table style="font-family: 'Montserrat',Arial,sans-serif; width: 100%;" width="100%" cellpadding="0" cellspacing="0" role="presentation">
                                <tr>
                                  <th align="left" style="padding-bottom: 8px;">
                                    <p>Service Requested</p>
                                  </th>
                                  <th align="right" style="padding-bottom: 8px;">
                                    <p>Status</p>
                                  </th>
                                </tr>
                                <tr>
                                  <td style="font-family: 'Montserrat',Arial,sans-serif; font-size: 14px; padding-top: 10px; padding-bottom: 10px; width: 80%;" width="80%">
                                  {{$data['service_name']}}
                                  </td>
                                  <td align="right" style="font-family: 'Montserrat',Arial,sans-serif; font-size: 14px; text-align: right; width: 20%;" width="20%">Sent Successfully</td>
                                </tr>
                            
                                <tr>
                             
                                </tr>
                              </table>
                            </td>
                          </tr>
                        </table>
                         

           
          
@include('emails.footer')