using System;
using System.Collections.Generic;
using System.Configuration;
using System.Linq;
using System.Security.Cryptography;
using System.Text;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

public partial class UserControls_Donations_Given: System.Web.UI.UserControl
{
    private static readonly Encoding encoding = Encoding.UTF8;
    private const string key = "decryptedOriginal";

    public object Donation { get; private set; }

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

    private string ComputeKnetHash(decimal amt, string paymentId)
    {
        var dataToComputeHash = amt.ToString("F3") + "amt" + paymentId + "paymentId";
        var hash = HnS.UI.Knet.helper.ConvertToHex(dataToComputeHash);
        return hash;

    }
        
    protected void Page_load(object sender, EventArgs e)
    {
        var paymentId = DateTime.Now.ToString("ddmmyyyyhhmmss"); //generate paymentId/transactionId
        var paymentchannel = "UGMTNMOMODIR";
        var isysid = paymentId;
        var amount = Convert.ToDecimal(Donation.Amount);
        var description = "something";
        var description2 = "testing2";
        var language = "EN";
        var country = "UG";
        var merchant_name = ConfigurationManager.AppSettings["MerchantName"];
        var akey = ConfigurationManager.AppSettings["AuthenticationKey"];
        var timestamp = "";
        var tunnel = "isys";
        var currency = "UGX";
        var rnd = "";
        var original = ConfigurationManager.AppSettings["OriginalEncryptedSalt"];
        var dataToComputeHash = paymentchannel + "paymentchannel" + isysid
                                + "isysid" + amount.ToString("F3") + "amount"
                                + timestamp + "timestamp" + description + "description"
                                + rnd + "rnd" + original + "original";
        HMACSHA256 hmac = new HMACSHA256();
        var hash = ConvertToHex(dataToComputeHash);
        var responseUrl = "enter response url";
        var path = ConfigurationManager.AppSettings["PayitUrl"];
        var url = path + "?paymentchannel=" + paymentchannel +
                  "&isysid=" + isysid +
                  "&amount=" + amount.ToString("F3") +
                  "&description=" + description + "&description2=" + description2 +
                  "&tunnel=" + tunnel + "&currency=" + currency +
                  "&language=" + language + "&country=" + country +
                  "&merchant_name=" + merchant_name +
                  "&akey=" + akey +
                  "&original=" + HttpUtility.UrlEncode(original) + "&responseurl=" + responseUrl + "&hash=" +
                  hash.ToUpper();
    }
    protected void ASPxButton1_Click(object sender, EventArgs e)
    {
        Response.Redirect("index.html");
    }

}



