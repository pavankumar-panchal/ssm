<?php
if ($usertype <> 'TEAMLEADER' && $usertype <> 'ADMIN' && $usertype <> 'MANAGEMENT')
  header("location:../index.php");
else {
  ?>
  <link rel="stylesheet" type="text/css" href="../style/main.css?dummy = <?php echo (rand()); ?>">
  <script language="javascript" src="../functions/javascripts.js?dummy = <?php echo (rand()); ?>"
    type="text/javascript"></script>
  <script language="javascript" src="../functions/categorymaster.js?dummy = <?php echo (rand()); ?>"
    type="text/javascript"></script>
  <table width="100%" border="0" cellspacing="0" cellpadding="4">
    <tr>
      <td class="content-header">Masters > Categories</td>
    </tr>
    <tr>
      <td></td>
    </tr>
    <tr>
      <td style="padding:0">
        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="border:1px solid #6393df; border-top:none;">
          <tr style="cursor:pointer" onClick="showhide('maindiv','toggleimg');">
            <td class="header-line" style="padding:0">&nbsp;&nbsp;Enter / Edit / View Details</td>
            <td align="right" class="header-line" style="padding-right:7px">
              <div align="right"><img src="../images/minus.jpg" border="0" id="toggleimg" name="toggleimg"
                  align="absmiddle" /></div>
            </td>
          </tr>
          <tr>
            <td colspan="2" valign="top">
              <div id="maindiv">
                <form action="" method="post" name="submitform" id="submitform" onSubmit="return false;">
                  <table width="100%" border="0" cellspacing="0" cellpadding="2">
                    <tr>
                      <td valign="top">
                        <table width="100%" border="0" cellspacing="0" cellpadding="3">
                          <tr bgcolor="#f7faff">
                            <td valign="top">Category Heading:</td>
                            <td valign="top"><input name="categoryheading" type="text" class="swifttext"
                                id="categoryheading" size="50" />
                              <input type="hidden" name="lastslno" id="lastslno" value="" />
                              <input type="hidden" name="loggeduser" id="loggeduser" value="<?php echo ($user); ?>" />
                              <input type="hidden" name="loggedusertype" id="loggedusertype"
                                value="<?php echo ($usertype); ?>" />
                              <input type="hidden" name="loggedreportingauthority" id="loggedreportingauthority"
                                value="<?php echo ($reportingauthority); ?>" />
                            </td>
                          </tr>
                          <tr bgcolor="#edf4ff">
                            <td valign="top">Remarks:</td>
                            <td valign="top"><input name="remarks" type="text" class="swifttext" id="remarks" size="50" />
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" align="right" valign="middle"
                        style="padding-right:15px; border-top:1px solid #d1dceb;">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0" height="35">
                          <tr>
                            <td width="68%" height="35" align="left" valign="middle">
                              <div id="form-error"></div>
                            </td>
                            <td width="32%" height="35" align="right" valign="middle"><input name="new" type="reset"
                                class="swiftchoicebutton" id="new" value="New" onclick="newentry();clearinnerhtml(); " />
                              &nbsp;&nbsp;&nbsp;
                              <input name="save" type="submit" class="swiftchoicebutton" id="save" value="Save"
                                onclick="formsubmit('save')" />
                              &nbsp;&nbsp;&nbsp;
                              <input name="delete" type="submit" class="swiftchoicebuttondisabled" id="delete"
                                value="Delete" onclick="formsubmit('delete')" disabled="disabled" />
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                </form>
              </div>
            </td>
          </tr>

        </table>
      </td>
    </tr>
    <tr>
      <td style="padding:0">&nbsp;</td>
    </tr>
    <tr>
      <td></td>
    </tr>
    <tr>
      <td style="padding:0">
        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="border:1px solid #6393df; border-top:none;">
          <tr style="cursor:pointer" onClick="showhide('filterdiv','toggleimg1');">
            <td class="header-line" style="padding:0">&nbsp;&nbsp;Filter the Data:</td>
            <td align="right" class="header-line" style="padding-right:7px;">
              <div align="right"><img src="../images/plus.jpg" border="0" id="toggleimg1" name="toggleimg1"
                  align="absmiddle" /></div>
            </td>
          </tr>
          <tr>
            <td colspan="2" valign="top">
              <div id="filterdiv" style="display:none;">
                <form action="" method="post" name="filterform" id="filterform" onSubmit="return false;">
                  <table width="100%" border="0" cellspacing="0" cellpadding="2">
                    <tr>
                      <td width="50%" valign="top" style="border-right:1px solid #d1dceb;">
                        <table width="100%" border="0" cellspacing="0" cellpadding="3">
                          <tr bgcolor="#f7faff">
                            <td valign="top">Search Text:</td>
                            <td valign="top"><input name="searchcriteria" type="text" class="swifttext"
                                id="searchcriteria" size="40" /></td>
                          </tr>
                        </table>
                      </td>
                      <td width="50%" valign="top">
                        <table width="100%" border="0" cellspacing="0" cellpadding="3">
                          <tr bgcolor="#f7faff">
                            <td valign="top">Order By:</td>
                            <td valign="top"><select name="orderby" class="swiftselect" id="orderby">
                                <option value="categoryheading" selected="selected">Category Heading</option>
                                <option value="remarks">Remarks</option>
                              </select></td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" valign="middle" style="padding-right:15px; border-top:1px solid #d1dceb;"
                        height="35">In:
                        <label>
                          <input name="databasefield" type="radio" id="databasefield0" value="categoryheading"
                            checked="checked" />
                          Category Heading
                        </label>
                        <label>
                          <input type="radio" name="databasefield" id="databasefield0" value="remarks" />
                          Remarks</label>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" align="right" valign="middle"
                        style="padding-right:15px; border-top:1px solid #d1dceb;" height="35">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="85%" height="35" valign="middle">
                              <div id="filter-form-error"></div>
                            </td>
                            <td width="15%" height="35" align="right" valign="middle"><input name="view" type="submit"
                                class="swiftchoicebutton" id="view" value="View" onclick="formfilter('view'); " />
                              &nbsp;&nbsp;&nbsp; <img src="../images/toexcel.png" border="0" align="absmiddle"
                                onclick="formfilter('toexcel');" style="cursor:pointer" /></td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                </form>
              </div>
            </td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td style="padding:0">&nbsp;</td>
    </tr>
    <tr>
      <td style="padding:0">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr style="border-left:none; border-right:none;">
            <td style="padding:0; border:none;" width="26%">
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="84px" align="center" id="tabgroupgridh1" onClick="gridtab2('1','tabgroupgrid');"
                    style="cursor:pointer" class="grid-active-tabclass">Default</td>
                  <td width="2">&nbsp;</td>
                  <td width="84px" align="center" id="tabgroupgridh2" onClick="gridtab2('2','tabgroupgrid');"
                    style="cursor:pointer" class="grid-tabclass">Filter</td>
                  <td width="2">&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
              </table>
            </td>
            <td><span id="tabgroupgridwb1"></span><span id="tabgroupgridwb2"></span></td>
          </tr>

        </table>
      </td>
    </tr>
    <tr>
      <td style="padding:0">
        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="border:1px solid #6393df; border-top:none;">
          <tr>
            <td width="10%" class="header-line" style="padding:0">&nbsp;&nbsp;View Records: </td>
            <td width="75%" class="header-line" style="padding:0"></td>
            <td width="15%" class="header-line" style="padding:0"></td>
          </tr>
          <tr>
            <td colspan="3" align="center" valign="top">
              <div id="tabgroupgridc1" style="overflow:auto; height:300px; width:1060PX; padding:2px;" align="center">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td align="center">
                      <div id="tabgroupgridc1_2"> </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div id="tabgroupgridc1link1" style="padding:2px;" align="left"> </div>
                    </td>
                  </tr>
                </table>
              </div>
              <div id="tabgroupgridc2" style="overflow:auto; height:300px; width:1060px; padding:2px;display:none"
                align="center">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td align="center">
                      <div id="tabgroupgridc1_1"> </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div id="tabgroupgridc1link" style="padding:2px;" align="left"> </div>
                    </td>
                  </tr>
                </table>
              </div>
              <div id="regresultgrid" style="overflow:auto; display:none; height:300px; width:1060px; padding:2px;">&nbsp;
              </div>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
<?php } ?>