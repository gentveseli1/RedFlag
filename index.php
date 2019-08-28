<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href=“https://fonts.googleapis.com/css?family=Open+Sans&display=swap” rel=“stylesheet”>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css?v=<?php echo uniqid();?>"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css?v=<?php echo uniqid();?>" type="text/css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/rowreorder/1.2.5/js/dataTables.rowReorder.min.js">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js">
  <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="Stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
  <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.9/css/select2.min.css" rel="stylesheet" /> -->
  <link href="https://unpkg.com/multiple-select@1.3.1/dist/multiple-select.css" rel="stylesheet">
  <title>Red Flags</title>
</head>
    <div class="topnav">
      <a href="#home" class="redflag">Red Flags</a>
      <div id="myLinks">
        <form class="form-group"><input type="text" class="form-control searchbarsize" placeholder="Search"></form>
        <a href="#news" class="txtalign">Features</a>
        <a href="#contact" class="txtalign">How it works</a>
        <a href="#about" class="txtalign">Contact</a>
      </div>
      <a href="javascript:void(0);" class="icon" id="burger">
        <i class="fa fa-bars"></i>
      </a>
    </div>
        <div class="row top-header width100">
          <div class="container-fluid d-flex">
            <div class="col-lg-3 d-flex align-self-center padding40">
              <img src="img/whiteflag.svg">
                <p class="redflag">Red Flags</p>
            </div>
            <div class="col-lg-6 d-flex justify-content-center align-self-center" align="center">
              <form class="form-group form2"><input type="text" class="form-control searchbarsize" placeholder="Search"></form>
            </div>
            <div class="col-lg-3 align-self-center d-flex" align="center">
                <a class="one" href="#">Features</a>
                <a class="two" href="#">How it works</a>
                <a class="three" href="#">Contact</a>
            </div>
          </div>
        </div>
  <body>
    <div class="row under-header width100">
      <div class="container-fluid align-self-center">
        <div class="col-12 col-sm-12 h-100 padding40">
          <p>
            <span class="description1">There are <span class="boldtobe">15,459</span> red flagged tenders out of <span class="boldtobe">45,345</span></span><br>
            <span class="description2">all information and tenders are from the public procurement system <span class="boldtobe">"eprokurorimi"</span>
            </span>
          </p>
        </div>
      </div>
    </div>

      <div class="row width100">
        <div class="container-fluid margtop">
          <span class="d-flex spaflex wt">
  <button  class="ruajfilterat btn kolor wt1" type="button" data-toggle="modal" data-target="#myModal">
    <i class="fa fa-cog"></i>
    Filterat
  </button></span></div>
  <!-- The Modal -->
  <div class="modal" id="myModal" align="center">
    <div class="modal-dialog">
    	<div class="modal-content modal-one">

                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class="modal-title">Vendosni emailin tuaj</h4>
                      <button type="button" class="close modal-one-x">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                      <input type="email" id="email" pattern=".+@globex.com" size="30" required>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <button type="button" class="btn kolor">Ruaj</button>
                    </div>

                  </div>
      <div class="modal-content wt2">
        <div class="modal-body">
         <div class="hiddenfilters" align="center">
          <button  class="ruajfilterat magicBtn btn kolor" type="button">
            Ruaj Filterat
          </button>
      
		  <div class="base padd">
            <span class="d-flex jcsb"><p class="tekstidata">Data</p><span class="span2">
              <input class="inpt2 font12" size="7" type="text" value="  Prej" id="datepicker">
              <span class="span3">
                <input class="inpt2 font12" size="7" type="datetime" value="  Deri" id="datepicker2">
              </span>
            </span>
          </div>
          <div class="base padd">
            <span class="d-flex jcsb">
              <p class="tekstidata d-flex">Indikatorët</p>
             <!--  <select class="js-example-basic-multiple" name="states[]" multiple="multiple"> -->
              <select multiple="multiple" class="indikatoret" placeholder="Zgjedhe 1 ose me shume indikatore">
                  <option value="1">Çmimi me i ulët nuk është fitues</option>
                  <option value="2">Kompani në listë të zezë</option>
                  <option value="3">Procedurë e negocuar</option>
                  <option value="4">Kontrata nuk është publikuar</option>
                  <option value="5">Tejkalimi i vlerës së parashikuar</option>
                  <option value="6">Standarde të vendeve tjera</option>
                  <option value="7">Vetëm një ofertë e përgjegjshme</option>
                  <option value="8">Ndarja e kërkesave në disa tenderë</option>
              </select>
            </span>
          </div>
          <div class="base padd">
            <span class="d-flex jcsb">
              <p class="tekstidata d-flex">A. K.</p>
                <select class="akontraktuese">
                  <option value="1">Ministria Sherbimeve X</option>
                  <option value="2">Korporata per Energjy Y</option>
                  <option value="3">Komuna e Kosoves</option>
                </select>
          </div>
          <div class="base padd">
            <span class="d-flex jcsb">
              <p class="tekstidata d-flex">Vlera</p>
                <span class="d-flex">
                  <input class="inputnr" type="number" name="quantity" min="1" max="9999999">
                  <input class="inputnr" type="number" name="quantity" min="1" max="9999999">
                </span>
            </span>
          </div>
          <div class="base2 padd">
            <span class="d-flex jcsb">
              <p class="tekstidata2 d-flex">Flamujt e kuq</p>
                <select class="flamujtekuq">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                </select>
            </span>
          </div>
          <div class="base padd">
            <span class="d-flex jcsb">
              <p class="tekstidata d-flex">Fituesi</p>
                <select class="fituesi">
                  <option value="1">Ministria Sherbimeve X</option>
                </select>
            </span>
          </div>
            <div class="base padd backtrans">
              <span class="d-flex wid77">
                <a href="#" class="colorgray">Pastro filterat</a>
              </span>
                <button  class="btn kolor ruajfilterat2" type="button">Kërko</button>
              </span>
            </div>
          </div>
        </div>

        </div>
      </div>
    </div>
        <br style="clear: both;">
        <div class="container-fluid">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 magicpad margtop" align="center">
      <table id="dtHorizontalExample" class="table table-striped table-bordered table-sm magrtop" cellspacing="0">
              <thead>
                  <tr>
                      <th width="5%" align="center"><img src="img/group20.svg"></th>
                      <th width="45%">Titulli i tenderit</th>
                      <th width="15%">Furnizuesi</th>
                      <th width="15%">Blerësi</th>
                      <th width="10%">Dt. e nënshkrimit</th>
                      <th width="10%">Çmimi (€/TVSH)</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td><img src="img/group20.svg"> (1) </td>
                      <td>“Furnizim me material për zyre për nevojat e Komunës Shtërpcë dhe shkollave ne teritorin e komunës Shtërpcë si dhe mjekësis familjare në teritorin e komunës Shtërpcë</td>
                      <td>N.P.T.,,PRO MIX’’</td>
                      <td>SHPK.,,PRO MIX. Servis”</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                  </tr>
                  <tr>
                      <td><img src="img/group20.svg"> (8)</td>
                      <td>RI TENDERServisimi i Aparateve kundër zjarrit për Gjykaten Themelore Mitrovicë me degët e saj në Regjionin e Mitrovices</td>
                      <td>“ 192.168.1.1. “ SH.P.K.</td>
                      <td>SHPK.,,PRO MIX. Servis”</td>
                      <td>2011/07/25</td>
                      <td>$170,750</td>
                  </tr>
                  <tr>
                      <td><img src="img/group20.svg"> (8)</td>
                      <td>"Furnizim me artikuj ushqimor për qerdhe,shtëpin e komunitetit,dita të shkollave dhe familje me nevojëRi tenderim</td>
                      <td>D.P.Z.,,Besarti K.Z. Servis”</td>
                      <td>SHPK.,,PRO MIX. Servis”</td>
                      <td>2009/01/12</td>
                      <td>$86,000</td>
                  </tr>
                  <tr>
                      <td><img src="img/group20.svg"> (4)</td>
                      <td>Ndërtimi I tre rezervarëve të ujit për ujësjellsa ne fshatrat e KK Novobërdë Ndërtimi I tre rezervarëve të ujit për ujësjellsa ne fshatrat e KK Novo</td>
                      <td>“GRYKA” SH.P.K.</td>
                      <td>SHPK.,,PRO MIX. Servis”</td>
                      <td>2012/03/29</td>
                      <td>$433,060</td>
                  </tr>
                  <tr>
                      <td><img src="img/group20.svg"> (1)</td>
                      <td>FURNIZIMI ME INVENTAR PËR NEVOJAT E QKMF-se</td>
                      <td>N.N.SH: “Xhema Com”</td>
                      <td>SHPK.,,PRO MIX. Servis”</td>
                      <td>2008/11/28</td>
                      <td>$162,700</td>
                  </tr>
                  <tr>
                      <td><img src="img/group20.svg"> (6)</td>
                      <td>FURNIZIMI ME INVENTAR PËR NEVOJAT E QKMF-se</td>
                      <td>N.P.SH. “ ELIONI.COM “</td>
                      <td>SHPK.,,PRO MIX. Servis”</td>
                      <td>2012/12/02</td>
                      <td>$372,000</td>
                  </tr>
                  <tr>
                      <td><img src="img/group20.svg"> (3)</td>
                      <td>2 “Furnizim me material administrativ dhe tonera të ndryshëm”</td>
                      <td>OFFICE 1 KOSOVA SH.P.K.</td>
                      <td>SHPK.,,PRO MIX. Servis”</td>
                      <td>2012/12/02</td>
                      <td>$372,000</td>
                  </tr>
                  <tr>
                      <td><img src="img/group20.svg"> (2)</td>
                      <td>2 “Furnizim me material administrativ dhe tonera të ndryshëm”</td>
                      <td>OFFICE 1 KOSOVA SH.P.K.</td>
                      <td>SHPK.,,PRO MIX. Servis”</td>
                      <td>2012/12/02</td>
                      <td>$372,000</td>
                  </tr>
                  <tr>
                      <td><img src="img/group20.svg"> (1)</td>
                      <td>2 “Furnizim me material administrativ dhe tonera të ndryshëm”</td>
                      <td>OFFICE 1 KOSOVA SH.P.K.</td>
                      <td>SHPK.,,PRO MIX. Servis”</td>
                      <td>2012/12/02</td>
                      <td>$372,000</td>
                  </tr>
                  <tr>
                      <td><img src="img/group20.svg"> (8)</td>
                      <td>2 “Furnizim me material administrativ dhe tonera të ndryshëm”</td>
                      <td>OFFICE 1 KOSOVA SH.P.K.</td>
                      <td>SHPK.,,PRO MIX. Servis”</td>
                      <td>2012/12/02</td>
                      <td>$372,000</td>
                  </tr>
                  <tr>
                      <td><img src="img/group20.svg"> (7)</td>
                      <td>2 “Furnizim me material administrativ dhe tonera të ndryshëm”</td>
                      <td>OFFICE 1 KOSOVA SH.P.K.</td>
                      <td>SHPK.,,PRO MIX. Servis”</td>
                      <td>2012/12/02</td>
                      <td>$372,000</td>
                  </tr>
                  <tr>
                      <td><img src="img/group20.svg">(7)</td>
                      <td>2 “Furnizim me material administrativ dhe tonera të ndryshëm”</td>
                      <td>OFFICE 1 KOSOVA SH.P.K.</td>
                      <td>SHPK.,,PRO MIX. Servis”</td>
                      <td>2012/12/02</td>
                      <td>$372,000</td>
                  </tr>

                  </tbody>
                </table>
          </div>
        </div>
      </div>
      </div>
        <div class="row rowmarg0">
          <div class="container-fluid margtop magicpadl" align="center">
            <div class="col-12 col-sm-12 col-md-12 col-lg-3 mwidth" align="center">
              <div class="base4 d-flex">
                  <div class="col-1"><span class="dot"><img class="imgpos" src="img/group20.svg"></span></div>
                  <div class="col-11 margtop"><span class="totaltenders3">15,459</span><br><span class="totaltenders4">Totali i tenderëve me flamuj të kuq</span></div>
              </div>
              <div class="base7 margtop2">
                <p class="top10">Top 10 autoritetet kontraktuese me më së shumti flamuj të kuq</p><hr class="stili90">
                  <div class="row">
                    <img src="img/icon.svg" class="ballon1">
                    <p class="nrcolor">13</p><p class="undertank1">N.P.T.,,PRO MIX’’</p>
                  </div>
                  <hr class="stili90">
                  <div class="row">
                    <img src="img/icon.svg" class="ballon1">
                    <p class="nrcolor">6</p><p class="undertank1">N.P.T.,,PRO MIX’’</p>
                  </div>
                  <hr class="stili90">
                  <div class="row">
                    <img src="img/icon.svg" class="ballon1">
                    <p class="nrcolor">4</p><p class="undertank1">D.P.Z.,,Besarti K.Z. Servis”</p>
                  </div>
                  <hr class="stili90">
                  <div class="row">
                    <img src="img/icon.svg" class="ballon1">
                    <p class="nrcolor">3</p><p class="undertank1">N.P.T.,,PRO MIX’’</p>
                  </div>
                  <hr class="stili90">
                  <div class="row">
                    <img src="img/icon.svg" class="ballon1">
                    <p class="nrcolor">12</p><p class="undertank1">N.P.T.,,PRO MIX’’</p>
                  </div>
                  <hr class="stili90">
                  <div class="row">
                    <img src="img/icon.svg" class="ballon1">
                    <p class="nrcolor">12</p><p class="undertank1">N.P.T.,,PRO MIX’’</p>
                  </div>
                  <hr class="stili90">
                  <div class="row">
                    <img src="img/icon.svg" class="ballon1">
                    <p class="nrcolor">12</p><p class="undertank1">N.P.T.,,PRO MIX’’</p>
                  </div>
                  <hr class="stili90">
                  <div class="row">
                    <img src="img/icon.svg" class="ballon1">
                    <p class="nrcolor">12</p><p class="undertank1">N.P.T.,,PRO MIX’’</p>
                  </div>
                  <hr class="stili90">
                  <div class="row">
                    <img src="img/icon.svg" class="ballon1">
                    <p class="nrcolor">12</p><p class="undertank1">N.P.T.,,PRO MIX’’</p>
                  </div>
                  <hr class="stili90">
                  <div class="row">
                    <img src="img/icon.svg" class="ballon1">
                    <p class="nrcolor">12</p><p class="undertank1">N.P.T.,,PRO MIX’’</p>
                  </div>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6" align="center">
              <div class="base5">
                <p class="userretention paddings">Rradhitja e tenderëve në bazë të numrit të flamujve të kuq</p>
                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-4 paddings">
                    <p class="risk">Ndërtimi I tre rezervarëve të ujit për ujësjellsa ne fshatrat e KK Novobërdë Ndërtimi I tre rezervarëve të… ujit për ujësjellsa ne fshatrat e KK Novo</p>
                    <p class="risk">2 “ Furnizim me artikuj ushqimor për qerdhe,shtëpin e komunitetit,dita të shkollave dhe familje me nevojëRi… tenderim</p>
                    <p class="risk">2 “Furnizim me material administrativ dhe tonera të ndryshëm”</p>
                    <p class="risk">FURNIZIMI ME INVENTAR PËR NEVOJAT E QKMF-se</p>
                    <p class="risk">RI TENDERServisimi i Aparateve kundër zjarrit për Gjykaten Themelore Mitrovicë me degët e saj në… Regjionin e Mitrovices</p>
                    <p class="risk">“Furnizim me material për zyre për nevojat e Komunës Shtërpcë dhe shkollave ne teritorin e komunës Shtë… dhe mjekësis familjare në teritorin e komunës Shtërpcë</p>
                  </div>
                  <div class="col-12 col-sm-12 col-md-12 col-lg-8">
                    <div class="row zeroto7" style="width: 100%; padding-left: 35px;">0 <span style="padding-left: 52px;">10</span> <span style="padding-left: 44px;">20</span> <span style="padding-left: 46px;">30</span> <span style="padding-left: 44px;">40</span> <span style="padding-left: 50px;">50</span> <span style="padding-left: 44px;">60</span></div>
                      <div class="row paddleft">
                      <p class="rectangle margtop2"></p>
                      <p class="rectangle2 margtop2"></p>
                      <p class="rectangle3 margtop2"></p>
                      <p class="rectangle4 margtop2"></p>
                      <p class="rectangle5 margtop2"></p>
                      <p class="rectangle6 margtop2"></p>
                      <p class="rectangle7 margtop2"></p>
                      </div>
                      <div class="row paddleft">
                      <p class="rectangle margtop2"></p>
                      <p class="rectangle2 margtop2"></p>
                      <p class="rectangle3 margtop2"></p>
                      <p class="rectangle4 margtop2"></p>
                      <p class="rectangle5 margtop2"></p>
                      <p class="rectangle6 margtop2"></p>
                      </div>
                      <div class="row paddleft">
                      <p class="rectangle margtop2"></p>
                      <p class="rectangle2 margtop2"></p>
                      <p class="rectangle3 margtop2"></p>
                      <p class="rectangle4 margtop2"></p>
                      <p class="rectangle5 margtop2"></p>
                      </div>
                      <div class="row paddleft">
                      <p class="rectangle margtop2"></p>
                      <p class="rectangle2 margtop2"></p>
                      <p class="rectangle3 margtop2"></p>
                      <p class="rectangle4 margtop2"></p>
                      </div>
                      <div class="row paddleft">
                      <p class="rectangle margtop2"></p>
                      <p class="rectangle2 margtop2"></p>
                      <p class="rectangle3 margtop2"></p>
                      </div>
                      <div class="row paddleft">
                      <p class="rectangle margtop2"></p>
                      <p class="rectangle2 margtop2"></p>
                      </div>
                      <div class="row paddleft">
                      <p class="rectangle margtop2"></p>
                        </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-3 mwidth" align="center">
                <div class="base6">
              <p class="top10">Radhitja e indikatorëve në bazë të numrit të flamujve të kuq</p><hr class="stili90">
                  <div class="row">
                    <img src="img/icon.svg" class="ballon1">
                    <p class="nrcolor2">13</p><p class="undertank1">Mungesë konkurrence</p>
                  </div>
                  <hr class="stili90">
                  <div class="row">
                    <img src="img/icon.svg" class="ballon1">
                    <p class="nrcolor2">6</p><p class="undertank1">Mungesë Gare, Negocim i Drejtpërdrejtë</p>
                  </div>
                  <hr class="stili90">
                  <div class="row">
                    <img src="img/icon.svg" class="ballon1">
                    <p class="nrcolor2">4</p><p class="undertank1">Pamundësi kohore për përgatitje të një oferte</p>
                  </div>
                  <hr class="stili90">
                  <div class="row">
                    <img src="img/icon.svg" class="ballon1">
                    <p class="nrcolor2">3</p><p class="undertank1">N.P.T.,,PRO MIX’’</p>
                  </div>
                  <hr class="stili90">
                  <div class="row">
                    <img src="img/icon.svg" class="ballon1">
                    <p class="nrcolor2">12</p><p class="undertank1">N.P.T.,,PRO MIX’’</p>
                  </div>
                  <hr class="stili90">
                  <div class="row">
                    <img src="img/icon.svg" class="ballon1">
                    <p class="nrcolor2">12</p><p class="undertank1">N.P.T.,,PRO MIX’’</p>
                  </div>
                  <hr class="stili90">
                  <div class="row">
                    <img src="img/icon.svg" class="ballon1">
                    <p class="nrcolor2">12</p><p class="undertank1">N.P.T.,,PRO MIX’’</p>
                  </div>
                  <hr class="stili90">
                  <div class="row">
                    <img src="img/icon.svg" class="ballon1">
                    <p class="nrcolor2">12</p><p class="undertank1">N.P.T.,,PRO MIX’’</p>
                  </div>
                  <hr class="stili90">
                  <div class="row">
                    <img src="img/icon.svg" class="ballon1">
                    <p class="nrcolor2">12</p><p class="undertank1">N.P.T.,,PRO MIX’’</p>
                  </div>
                  <hr class="stili90">
                  <div class="row">
                    <img src="img/icon.svg" class="ballon1">
                    <p class="nrcolor2">12</p><p class="undertank1">N.P.T.,,PRO MIX’’</p>
                  </div>
            </div>
                </div>
              </div>
            </div>
          </span>
        </div>
      </span>
      </div>
      </span>
      </div>
    </div>
  </div>
</div>
    <div class="row footer1 width100 mwidth2">
      <div class="col-12 col-sm-12 col-md-3" align="center"><p class="copyright3">COPYRIGHT © 2019 / DPLUS</p></div>
      <div class="col-12 col-sm-12 col-md-6" align="center"><p class="copyright1">PËRKRAHUR NGA: <img src="img/usaid.svg"></p></div>
      <div class="col-12 col-sm-12 col-md-3" align="center"><p class="copyright2">PËR NE / KUFIZIMET E PORTALIT / ABONOHU</p></div>
    </div>
  </body>
<footer>
  <style type="text/css">

  </style>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://unpkg.com/multiple-select@1.3.1/dist/multiple-select.js"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.9/js/select2.min.js"></script> -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js" type="text/javascript"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js" type="text/javascript"></script>


<script type="text/javascript">
  $(document).ready(function() {

    $('#burger.icon').click(function(){
      if(!$('#myLinks').hasClass('opened')){
        $('#myLinks').addClass('opened')
         $('#myLinks').slideDown()
      }
      else{
        $('#myLinks').removeClass('opened')
        $('#myLinks').slideUp()
      }
    });
    var $j = jQuery.noConflict();
    $j("#datepicker").datepicker();
    var $j = jQuery.noConflict();
    $j("#datepicker2").datepicker();
    $.fn.dataTable.ext.classes.sPageButton = 'button primary_button';
    var table = $('#dtHorizontalExample').DataTable( {
        rowReorder: {
            selector: 'td:nth-child(2)'
        },
        pageLength: 10,
        responsive: true,
        lengthChange: false,
    });
    $('.searchbarsize').keyup(function(){
      table.search($(this).val()).draw() ;
    });
    // $(document).ready(function(){
    //   $('.js-example-basic-multiple').select2();
    // });
    function formatState (state) {
  if (!state.id) {
    return state.text;
  }
  var baseUrl = "/user/pages/images/flags";
  var $state = $(
    '<span><img src="' + baseUrl + '/' + state.element.value.toLowerCase() + '.png" class="img-flag" /> ' + state.text + '</span>'
  );
  return $state;
};

  // $(".js-example-templating").select2({
  //   templateResult: formatState
  // });
  // $(document).ready(function() {
  //     $('.js-example-basic-single').select2();
  // });
    $('.indikatoret').multipleSelect()
    $('.akontraktuese').multipleSelect({
     filter: true,
     single: true
   })
    $('.fituesi').multipleSelect({
     filter: true,
     single: true
   })
});

  $('.magicBtn').click(function(){
  	$('.modal-one').css('display','block')
  })
   $('.modal-one-x').click(function(){
  	$('.modal-one').css('display','none')
  })
    </script>
  </footer>
</html>
