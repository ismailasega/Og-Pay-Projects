using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Text;
using System.Security.Cryptography;

public partial class UserControls_Donations_GiveIn : System.Web.UI.UserControl
{
    protected void Page_Load(object sender, EventArgs e)
    {

    }
    protected void ASPxButton1_Click(object sender, EventArgs e)
    {
        string paymentchannel = "UGMTNMOMODIR";
        string isysid = "201507072222006";
        string amount = "1";
        string description = HttpUtility.UrlEncode("something");
        string description2 = "testing2";
        string tunnel = "isys";
        string currency = "414";
        string language = "EN";
        string country = "UG";
        string merchant_name = "{ provided by OneGlobal }";
        string akey = "{ provided by OneGlobal }";
        string timestamp = "";
        string rnd = "";
        string msisdn = "{ Customer Mobile Number }";
        string original = "{ provided by OneGlobal }";
        string dataToComputeHash = paymentchannel + "paymentchannel" + isysid
                                        + "isysid" + amount + "amount"
                                        + timestamp + "timestamp" + description + "description"
                                        + rnd + "rnd" + original + "original" + msisdn + "msisdn"
                                        + currency + "currency" + tunnel + "tunnel";

        string decryptedOriginal = "{ provided by OneGlobal }";

        HMACSHA256 hmac = new HMACSHA256()
        (System.Text.Encoding.UTF8.GetBytes(decryptedOriginal));

        string hash = SecurityHelper.convertToHex
        (hmac.ComputeHash(Text.UTF8Encoding.Default.GetBytes(dataToComputeHash)));

        string path = "http://pay-it.mobi/globalpayit/pciglobal/WebForms/Payitcheckoutservice2.aspx";

        string url = path + "?paymentchannel=" + paymentchannel +
                     "&isysid=" + isysid +
                     "&amount=" + amount +
                     "&description=" + description + "&description2=" + description2 +
                     "&tunnel=" + tunnel + "&currency=" + currency +
                     "&language=" + language + "&country=" + country +
                     "&merchant_name=" + merchant_name +
                     "&akey=" + akey + "&timestamp=" + timestamp +
                     "&original=" + HttpUtility.UrlEncode(original) +
                     "&hash=" + hash.ToUpper() + " & msisdn = " + msisdn + " & rnd = " + rnd;

     Response.Redirect(url);
    }
}

