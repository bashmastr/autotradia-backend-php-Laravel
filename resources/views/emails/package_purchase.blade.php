
@include('emails.header')

 

              <tr>
                <td align="center" class="sm-px-24" style="font-family: 'Montserrat',Arial,sans-serif;">
                  <table style="font-family: 'Montserrat',Arial,sans-serif; width: 100%;" width="100%" cellpadding="0" cellspacing="0" role="presentation">
                    <tr>
                      <td class="sm-px-24" style="--bg-opacity: 1; background-color: #ffffff; background-color: rgba(255, 255, 255, var(--bg-opacity)); border-radius: 4px; font-family: Montserrat, -apple-system, 'Segoe UI', sans-serif; font-size: 14px; line-height: 24px; padding: 48px; text-align: left; --text-opacity: 1; color: #626262; color: rgba(98, 98, 98, var(--text-opacity));" bgcolor="rgba(255, 255, 255, var(--bg-opacity))" align="left">
                        <p style="font-weight: 600; font-size: 18px; margin-bottom: 0;">Hey</p>
                        <p style="font-weight: 700; font-size: 20px; margin-top: 0; --text-opacity: 1; color: #ff5850; color: rgba(255, 88, 80, var(--text-opacity));"> {{$data['user_name']}} </p>
                        <p style="margin: 0 0 24px;">
                        👏  Thanks for using Autotradia Feature Ad service. This is an invoice for your recent purchase.
                        </p>

                        <a href="https://1.envato.market/vuexy_admin">
                          <img src="{{asset('images/email/purchase-package-removebg-preview.png')}}" width="930"  alt="Vuexy Admin" style="border: 0; max-width: 100%; line-height: 70%; text-align: center;  display: block; margin-left: auto; margin-right: auto; width: 50%; ">
                        </a>


                        <table style="font-family: 'Montserrat',Arial,sans-serif; width: 100%;" width="100%" cellpadding="0" cellspacing="0" role="presentation">
                          <tr>
                            <td style="font-family: 'Montserrat',Arial,sans-serif; font-size: 14px;  ">
                              <table style="font-family: 'Montserrat',Arial,sans-serif; width: 100%;" width="100%" cellpadding="0" cellspacing="0" role="presentation">
                                <tr>
                                  <td style="font-family: 'Montserrat',Arial,sans-serif; font-size: 14px;"><strong>Discount :</strong> Rs. 0</td>
                                </tr>
                                <tr>
                                  <td style="font-family: 'Montserrat',Arial,sans-serif; font-size: 14px;">
                                    <strong>Total Amount :</strong>   Rs {{$data['package_price']}} 
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                        </table>

                        <br> 
                        <table style="font-family: 'Montserrat',Arial,sans-serif; width: 100%;" width="100%" cellpadding="0" cellspacing="0" role="presentation">
                          <tr>
                            <td style="font-family: 'Montserrat',Arial,sans-serif;">
                              <h3 style="font-weight: 700; font-size: 12px; margin-top: 0; text-align: left;">Purchase Date: </h3>
                            </td>
                            <td style="font-family: 'Montserrat',Arial,sans-serif;">
                              <h3 style="font-weight: 700; font-size: 12px; margin-top: 0; text-align: right;">
                              {{$data['purchase_date']}} 
                              </h3>
                            </td>
                          </tr>



                          <tr>
                            <td style="font-family: 'Montserrat',Arial,sans-serif;">
                              <h3 style="font-weight: 700; font-size: 12px; margin-top: 0; text-align: left;">Expiry Date: </h3>
                            </td>
                            <td style="font-family: 'Montserrat',Arial,sans-serif;">
                              <h3 style="font-weight: 700; font-size: 12px; margin-top: 0; text-align: right;">
                              {{$data['expiry_date']}} 
                              </h3>
                            </td>
                          </tr>


                          <tr>
                            <td colspan="2" style="font-family: 'Montserrat',Arial,sans-serif;">
                              <table style="font-family: 'Montserrat',Arial,sans-serif; width: 100%;" width="100%" cellpadding="0" cellspacing="0" role="presentation">
                                <tr>
                                  <th align="left" style="padding-bottom: 8px;">
                                    <p>Package</p>
                                  </th>
                                  <th align="right" style="padding-bottom: 8px;">
                                    <p>Amount</p>
                                  </th>
                                </tr>
                                <tr>
                                  <td style="font-family: 'Montserrat',Arial,sans-serif; font-size: 14px; padding-top: 10px; padding-bottom: 10px; width: 80%;" width="80%">
                                  {{$data['package_name']}} 
                                  </td>
                                  <td align="right" style="font-family: 'Montserrat',Arial,sans-serif; font-size: 14px; text-align: right; width: 20%;" width="20%">  Rs {{$data['package_price']}} </td>
                                </tr>
                            
                                <tr>
                                  <td style="font-family: 'Montserrat',Arial,sans-serif; width: 80%;" width="80%">
                                    <p align="right" style="font-weight: 700; font-size: 14px; line-height: 24px; margin: 0; padding-right: 16px; text-align: right;">
                                      Total
                                    </p>
                                  </td>
                                  <td style="font-family: 'Montserrat',Arial,sans-serif; width: 20%;" width="20%">
                                    <p align="right" style="font-weight: 700; font-size: 14px; line-height: 24px; margin: 0; text-align: right;">
                                    

                                    Rs {{$data['package_price']}} 


                                    </p>
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                        </table>
    
         
@include('emails.footer')