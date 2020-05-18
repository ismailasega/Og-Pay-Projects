<%@ Control Language="C#" AutoEventWireup="true" CodeFile="GiveIn.ascx.cs" Inherits="UserControls_Donations_GiveIn" %>
<style type="text/css">

        .auto-style19 {
            font-size: 10pt;
        }
        .auto-style20 {
            width: 498px;
            font-size: 10pt;
        }
        .auto-style7 {
            width: 498px;
        }
        .auto-style12 {
            width: 159px;
            height: 29px;
            font-size: 10pt;
        }
        .auto-style13 {
            width: 498px;
            height: 29px;
            font-size: 10pt;
        }
        .auto-style16 {
            width: 159px;
            height: 31px;
            font-size: 10pt;
        }
        .auto-style17 {
            width: 498px;
            height: 31px;
            font-size: 10pt;
        }
        .auto-style27 {
            width: 108px;
        }
        .auto-style40 {
            width: 19px;
        }
        .auto-style35 {
            font-size: 10pt;
            height: 38px;
        }
        .auto-style32 {
            font-size: 10pt;
            height: 39px;
        }
        .auto-style46 {
        font-size: 10pt;
    }
    .auto-style50 {
        font-size: 10pt;
    }
    .auto-style52 {
        font-size: 10pt;
        width: 159px;
    }
    .auto-style53 {
        width: 159px;
    }
    .auto-style54 {
        font-size: 10pt;
        width: 243px;
    }
    .auto-style55 {
        width: 243px;
    }
    .auto-style56 {
        width: 243px;
        height: 29px;
        font-size: 10pt;
    }
    .auto-style57 {
        width: 243px;
        height: 31px;
        font-size: 10pt;
    }
    .auto-style58 {
        font-size: 10pt;
        height: 38px;
        width: 243px;
    }
    .auto-style59 {
        font-size: 10pt;
        height: 39px;
        width: 243px;
    }
    .auto-style60 {
        width: 49px;
    }
    .auto-style61 {
        width: 13px;
    }
    .auto-style62 {
        width: 47px;
    }
    .auto-style64 {
        width: 9px;
    }
    .auto-style65 {
        width: 351px;
    }
</style>
                    <dx:ASPxRoundPanel ID="ASPxRoundPanel1" runat="server" ShowCollapseButton="true" Width="100%">
                        <PanelCollection>
<dx:PanelContent runat="server">
    <table class="dx-justification">
        <tr>
            <td>
                &nbsp;</td>
        </tr>
        <tr>
            <td>
                <table class="dx-justification">
                    <tr>
                        <td class="auto-style54">&nbsp;</td>
                        <td class="auto-style52"><strong>First Name</strong></td>
                        <td class="auto-style20"><strong>Last Name </strong></td>
                    </tr>
                    <tr>
                        <td class="auto-style55">
                            &nbsp;</td>
                        <td class="auto-style53">
                            <dx:ASPxTextBox ID="FnameTextBox1" runat="server" Height="40px" Width="300px">
                            </dx:ASPxTextBox>
                        </td>
                        <td class="auto-style7">
                            <dx:ASPxTextBox ID="LnameTextBox2" runat="server" Height="40px" Width="300px">
                            </dx:ASPxTextBox>
                        </td>
                    </tr>
                    <tr>
                        <td class="auto-style56">&nbsp;</td>
                        <td class="auto-style12"><strong>Email</strong></td>
                        <td class="auto-style13"><strong>Country</strong></td>
                    </tr>
                    <tr>
                        <td class="auto-style55">
                            &nbsp;</td>
                        <td class="auto-style53">
                            <dx:ASPxTextBox ID="EmailTextBox3" runat="server" Height="40px" Width="300px">
                            </dx:ASPxTextBox>
                        </td>
                        <td class="auto-style7">
                            <dx:ASPxComboBox ID="CountryComboBox1" runat="server" Height="40px" Width="300px" AutoPostBack="True" DataSourceID="Countries_ODS">
                                <Columns>
                                    <dx:ListBoxColumn FieldName="en_short_name" />
                                </Columns>
                            </dx:ASPxComboBox>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="auto-style57">&nbsp;</td>
                        <td class="auto-style16"><strong>Phone Number </strong></td>
                        <td class="auto-style17"><strong>Select Campaign</strong></td>
                    </tr>
                    <tr>
                        <td class="auto-style55">
                            &nbsp;</td>
                        <td class="auto-style53">
                            <dx:ASPxTextBox ID="PhoneTextBox4" runat="server" Height="40px" Width="300px">
                            </dx:ASPxTextBox>
                        </td>
                        <td class="auto-style7">
                            <dx:ASPxComboBox ID="CampaniComboBox2" runat="server" Height="40px" Width="300px" AutoPostBack="True">
                                <Items>
                                    <dx:ListEditItem Text="Zakat" Value="Zakat" />
                                    <dx:ListEditItem Text="Donation" Value="Donation" />
                                    <dx:ListEditItem Text="Charity" Value="Charity" />
                                </Items>
                            </dx:ASPxComboBox>
                        </td>
                    </tr>
                    <tr>
                        <td class="auto-style55">&nbsp;</td>
                        <td class="auto-style53">&nbsp;</td>
                        <td class="auto-style7">&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="auto-style54">&nbsp;</td>
                        <td class="auto-style46" colspan="2"><strong>Payment Option</strong></td>
                    </tr>
                    <tr>
                        <td class="auto-style54">&nbsp;</td>
                        <td class="auto-style50" colspan="2">&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="auto-style54">
                            &nbsp;</td>
                        <td class="auto-style19" colspan="2">
                            <table class="dxflInternalEditorTable">
                                <tr>
                                    <td class="auto-style64">
                                        <asp:Image ID="Image1" runat="server" Height="50px" ImageUrl="~/assets/img/mtn.png" Width="50px" />
                                    </td>
                                    <td class="auto-style60">
                                        <asp:Image ID="Image2" runat="server" Height="50px" ImageUrl="~/assets/img/airtel.fw.png" Width="50px" />
                                    </td>
                                    <td class="auto-style61">
                                        <asp:Image ID="Image3" runat="server" Height="50px" ImageUrl="~/assets/img/africell.fw.png" Width="50px" />
                                    </td>
                                    <td class="auto-style40">
                                        <asp:Image ID="Image4" runat="server" Height="50px" ImageUrl="~/assets/img/interswitch.jpg" Width="50px" />
                                    </td>
                                    <td class="auto-style62">
                                        <asp:Image ID="Image5" runat="server" Height="50px" ImageUrl="~/assets/img/visa.jpg" Width="50px" />
                                    </td>
                                    <td class="auto-style27">
                                        <asp:Image ID="Image6" runat="server" Height="50px" ImageUrl="~/assets/img/visa2.jpg" Width="50px" />
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td class="auto-style58">
                            &nbsp;</td>
                        <td class="auto-style35" colspan="2">
                            <dx:ASPxRadioButtonList ID="PaymentRadioButtonList1" runat="server" AutoPostBack="True" EnableTheming="False" RepeatDirection="Horizontal" Width="600px">
                                <Items>
                                    <dx:ListEditItem Text="MTN" Value="MTN" />
                                    <dx:ListEditItem Text="AIRTEL" Value="AIRTEL" />
                                    <dx:ListEditItem Text="AFRICELL" Value="AFRICELL" />
                                    <dx:ListEditItem Text="INTERSWITCH" Value="INTERSWITCH" />
                                    <dx:ListEditItem Text="VISA-USD" Value="VISA-USD" />
                                    <dx:ListEditItem Text="VISA-UGX" Value="VISA-UGX" />
                                </Items>
                            </dx:ASPxRadioButtonList>
                        </td>
                    </tr>
                    <tr>
                        <td class="auto-style59">&nbsp;</td>
                        <td class="auto-style32" colspan="2"><strong>Enter Amount</strong></td>
                    </tr>
                    <tr>
                        <td class="auto-style54">
                            &nbsp;</td>
                        <td class="auto-style19" colspan="2">
                            <dx:ASPxTextBox ID="ASPxTextBox5" runat="server" Height="40px" Width="600px" Font-Bold="True" Font-Size="14pt" ForeColor="Red">
                            </dx:ASPxTextBox>
                        </td>
                    </tr>
                    <tr>
                        <td class="auto-style54">
                            &nbsp;</td>
                        <td class="auto-style19" colspan="2">
                            <table class="dxflInternalEditorTable">
                                <tr>
                                    <td>
                                        <dx:ASPxButton ID="PaymentButton1" runat="server" Font-Bold="True" Font-Size="10pt" Height="40px" Text="Process Payment" Theme="Office2010Blue">
                                            <Image IconID="actions_apply_32x32">
                                            </Image>
                                        </dx:ASPxButton>
                                    </td>
                                    <td>
                                        <dx:ASPxButton ID="ASPxButton1" runat="server" Font-Bold="True" Font-Size="10pt" Height="40px" OnClick="ASPxButton1_Click" PostBackUrl="~/index.html" Text="Back to Home Page" Theme="Office2010Blue">
                                            <Image IconID="navigation_backward_32x32">
                                            </Image>
                                        </dx:ASPxButton>

                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td class="auto-style65">
                                        <asp:ObjectDataSource ID="Countries_ODS" runat="server" DeleteMethod="Delete" InsertMethod="Insert" OldValuesParameterFormatString="original_{0}" SelectMethod="GetData" TypeName="KibuliHospitalTableAdapters.countriesTableAdapter" UpdateMethod="Update">
                                            <DeleteParameters>
                                                <asp:Parameter Name="Original_num_code" Type="Int32" />
                                                <asp:Parameter Name="Original_alpha_2_code" Type="String" />
                                                <asp:Parameter Name="Original_alpha_3_code" Type="String" />
                                            </DeleteParameters>
                                            <InsertParameters>
                                                <asp:Parameter Name="num_code" Type="Int32" />
                                                <asp:Parameter Name="alpha_2_code" Type="String" />
                                                <asp:Parameter Name="alpha_3_code" Type="String" />
                                                <asp:Parameter Name="en_short_name" Type="String" />
                                                <asp:Parameter Name="nationality" Type="String" />
                                                <asp:Parameter Name="phonecode" Type="String" />
                                            </InsertParameters>
                                            <UpdateParameters>
                                                <asp:Parameter Name="alpha_2_code" Type="String" />
                                                <asp:Parameter Name="alpha_3_code" Type="String" />
                                                <asp:Parameter Name="en_short_name" Type="String" />
                                                <asp:Parameter Name="nationality" Type="String" />
                                                <asp:Parameter Name="phonecode" Type="String" />
                                                <asp:Parameter Name="Original_num_code" Type="Int32" />
                                                <asp:Parameter Name="Original_alpha_2_code" Type="String" />
                                                <asp:Parameter Name="Original_alpha_3_code" Type="String" />
                                            </UpdateParameters>
                                        </asp:ObjectDataSource>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
                            </dx:PanelContent>
</PanelCollection>
                    </dx:ASPxRoundPanel>
                

