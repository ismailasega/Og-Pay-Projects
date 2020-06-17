using System;
using System.Collections.Generic;
using System.Configuration;
using System.Linq;
using System.Security.Cryptography;
using System.Text;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

public partial class UserControls_Donations_GiveIn : System.Web.UI.UserControl
{
    private static readonly Encoding encoding = Encoding.UTF8;
    private const string key = "xxxxxxxxxxxxxxxxx"; //decryptedOriginal

    public static string ConvertToHex(string dataToComputeHash)
    {
        var hash = "";
        try
        {
            var keyByte = encoding.GetBytes(key);
            using (var hmacsha256 = new HMACSHA256(keyByte))
            {
                hmacsha256.ComputeHash(encoding.GetBytes(dataToComputeHash));
                hash = ByteToString(hmacsha256.Hash);
            }
        }
        catch (Exception ex)
        {
          HttpContext.Current.Response.Redirect("Oops.html?error=" + ex.Message.ToString().Trim());
        }
        return hash;
    }
    static string ByteToString(byte[] buff)
    {
        string sbinary = "";
        try
        {
        
                sbinary = buff.Aggregate(sbinary, (current, t) => current + t.ToString("X2"));
        }
        catch (Exception ex)
        {
          HttpContext.Current.Response.Redirect("Oops.html?error=" + ex.Message.ToString().Trim());
        }
        return sbinary;
    }
    
        
    protected void Page_load(object sender, EventArgs e)
    {
       
    }
   
    protected void PaymentButton1_Click(object sender, EventArgs e)
    {
        var paymentId = DateTime.Now.ToString("ddmmyyyyhhmmss"); //generate paymentId/transactionId
            var paymentchannel = "UGMTNMOMODIR";
            var isysid = paymentId;
            var amount = AmountTextBox5.Text;
            var description = "something";
            var description2 = "testing2";
            var language = "EN";
            var country = "UG";
            var merchant_name = "xxxxxxxxxxxxxxxxxxxx"; //merchant name
            var akey = "xxxxxxxxxxxxxxxxxxxxxxx"; //authentication key
            var timestamp = DateTime.Now.ToString("ddmmyyyy");
            var tunnel = "isys";
            var currency = "UGX";
            var rnd = "";
            var original ="xxxxxxxxxxxxxxxxxxxxx"; //Encrypt Original
            var dataToComputeHash = paymentchannel + "paymentchannel" + isysid
                                   + "isysid" + amount + "amount" + timestamp + "timestamp" + description + "description"
                                   + rnd + "rnd" + original + "original";
            original = HttpUtility.UrlEncode("xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx");//Encrypt Original

            HMACSHA256 hmac = new HMACSHA256();
            var hash = ConvertToHex(dataToComputeHash);
            var responseUrl = "index.html"; // your response url
            var path= "https://pay-it.mobi/globalpayit/pciglobal/WebForms/Payitcheckoutservice%20.aspx";

            var url = path + "?paymentchannel=" + paymentchannel +
                      "&isysid=" + isysid + "&amount=" + amount + "&description=" + description + "&description2=" + description2 +
                      "&tunnel=" + tunnel + "&currency=" + currency + "&language=" + language + "&country=" + country +
                      "&merchant_name=" + merchant_name + "&akey=" + akey + "&original=" + original +
                      "&responseurl=" + responseUrl + "&hash=" + hash + "&timestamp=" + timestamp;

            Response.Redirect(url);

    }

}




