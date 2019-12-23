<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href=“https://fonts.googleapis.com/css?family=Open+Sans&display=swap” rel=“stylesheet”>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css?v=<?php echo uniqid();?>" type="text/css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css">
  <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="Stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
  <link href="https://unpkg.com/multiple-select@1.3.1/dist/multiple-select.css" rel="stylesheet">
  <title>Red Flags</title>
</head>
    <div class="topnav container">
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

        <div class="row top-header" style="z-index: 2000;">
          <div class="container d-flex">
            <div class="col-lg-2 d-flex align-self-center pl-0">
              <img src="img/Flagi_Bardh.svg">
                <p class="redflag">Red Flags</p>
            </div>
            <div class="col-lg-7 d-flex justify-content-center align-self-center p-0 ml-0">
              <form class="form-group form2"><input type="text" class="form-control searchbarsize" placeholder="Search"></form>
            </div>
            <div class="col-lg-3 align-self-center d-flex p-0" align="center">
                <a class="one" href="#">Features</a>
                <a class="two" href="#">How it works</a>
                <a class="three" href="#">Contact</a>
            </div>
          </div>
        </div>
  <body>
    <div class="row under-header">
      <div class="container align-self-center">
        <div class="col-12 col-sm-12 h-100 p-0">
          <p>
            <span class="description1">There are <span class="boldtobe">15,459</span> red flagged tenders out of <span class="boldtobe">45,345</span></span><br>
            <span class="description2">all information and tenders are from the public procurement system <span class="boldtobe">"eprokurorimi"</span>
            </span>
          </p>
        </div>
      </div>
      
    </div>

      <div class="container">
        <div class="row mt-3 ml-05 mr-05">

          <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 new-base jcsb">
            <p class="tekstidata pt-1 mb-0">Data</p>
            <div class="d-flex jcsb">
              <input class="calendar1 jscalendar w-50 mt-1" size="7" type="text" value="Prej" id="datepicker" format="yyyy-mm-dd">
              <input class="calendar1 jscalendar w-50 mt-1 ml-2" size="7" type="text" value="Deri" id="datepicker2" format="yyyy-mm-dd">
            </div>
          </div>
          <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 new-base jcsb">
            <p class="tekstidata m-0 pt-1">Fituesi</p>
              <select class="form-select select-input w-100 mt-1">
                <option value="1">Ministria Sherbimeve X</option>
              </select>
          </div>

          <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 new-base jcsb">
            <p class="tekstidata m-0 pt-1">Vlera</p>
            <div class="d-flex">
              <input class="value-input w-50 mr-1 mt-1" type="number" name="quantity" placeholder="min" min="1" max="9999999">
              <input class="value-input w-50 mt-1" type="number" name="quantity" placeholder="max" min="1" max="9999999">
            </div>
          </div>

          <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 new-base jcsb">
            <p class="tekstidata m-0 pt-1">Furnizuesi</p>
            <select class="form-select select-input w-100 mt-1">
              <option value="1">FURNIZUESI X</option>
            </select>
          </div>

        </div>
      </div>

      <div class="container">
        <div class="row mt-1 ml-05 mr-05">
          <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 new-base jcsb">
            <p class="tekstidata pt-1 m-0">A. K.</p>
              <select class="form-select select-input w-100 m-0 mt-1">
                <option value="1">Ministria Sherbimeve X</option>
                <option value="2">Korporata per Energjy Y</option>
                <option value="3">Komuna e Kosoves</option>
              </select>
          </div>
          <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 new-base jcsb">
            <p class="tekstidata m-0 pt-1">Indikatorët</p>
            <select multiple="multiple" class="indikatoret form-select w-100 mt-1" placeholder="Zgjedh indikatorët">
                <option value="1">Çmimi me i ulët nuk është fitues</option>
                <option value="2">Kompani në listë të zezë</option>
                <option value="3">Procedurë e negocuar</option>
                <option value="4">Kontrata nuk është publikuar</option>
                <option value="5">Tejkalimi i vlerës së parashikuar</option>
                <option value="6">Standarde të vendeve tjera</option>
                <option value="7">Vetëm një ofertë e përgjegjshme</option>
                <option value="8">Ndarja e kërkesave në disa tenderë</option>
            </select>
          </div>
          <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 base2">
            <p class="tekstidata2 pt-1 m-0">Flamujt e kuq</p>
              <select class="form-select select-input w-100 mt-1 m-0">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
              </select>
          </div>
          <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 new-base jcsb d-flex">
            <div class="align-self-center">
              <button type="submit" href="#" class="btn btn-danger">Pastro Filterat</button>
            </div>
            <div class="align-self-center">
              <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#exampleModalLong">Kërko</button>
            </div>
          </div>
        </div>
      </div>

        <!-- The modal -->
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Vendosni emailin tuaj</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div>
                  <input type="email" id="email" class="form-control w-100 h-50" pattern=".+@globex.com" size="30" required="">
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Mbyll</button>
                <button type="button" class="btn btn-primary">Ruaj</button>
              </div>
            </div>
          </div>
        </div>
 
          <div class="container mt-2" align="center">
            <table id="dataShownTable" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
              <thead>
                  <tr>
                      <th style="width: 5%;" align="center"><img src="img/group20.svg" class="bookingTd" title="Pershkrimi Indikatorit:"></th>
                      <th style="width: 30%;">Titulli i tenderit</th>
                      <th style="width: 15%;">Furnizuesi</th>
                      <th style="width: 15%;">Blerësi</th>
                      <th style="width: 10%;">Dt. e nënshkrimit</th>
                      <th style="width: 25%;">Çmimi (€/TVSH)</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>(1) </td>
                      <td>“Furnizim me material për zyre për nevojat e Komunës Shtërpcë dhe shkollave ne teritorin e komunës Shtërpcë si dhe mjekësis familjare në teritorin e komunës Shtërpcë</td>
                      <td>N.P.T.,,PRO MIX’’</td>
                      <td>SHPK.,,PRO MIX. Servis”</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                  </tr>
                  <tr>
                      <td>(8)</td>
                      <td>RI TENDERServisimi i Aparateve kundër zjarrit për Gjykaten Themelore Mitrovicë me degët e saj në Regjionin e Mitrovices</td>
                      <td>“ 192.168.1.1. “ SH.P.K.</td>
                      <td>SHPK.,,PRO MIX. Servis”</td>
                      <td>2011/07/25</td>
                      <td>$170,750</td>
                  </tr>
                  <tr>
                      <td>(8)</td>
                      <td>"Furnizim me artikuj ushqimor për qerdhe,shtëpin e komunitetit,dita të shkollave dhe familje me nevojëRi tenderim</td>
                      <td>D.P.Z.,,Besarti K.Z. Servis”</td>
                      <td>SHPK.,,PRO MIX. Servis”</td>
                      <td>2009/01/12</td>
                      <td>$86,000</td>
                  </tr>
                  <tr>
                      <td>(4)</td>
                      <td>Ndërtimi I tre rezervarëve të ujit për ujësjellsa ne fshatrat e KK Novobërdë Ndërtimi I tre rezervarëve të ujit për ujësjellsa ne fshatrat e KK Novo</td>
                      <td>“GRYKA” SH.P.K.</td>
                      <td>SHPK.,,PRO MIX. Servis”</td>
                      <td>2012/03/29</td>
                      <td>$433,060</td>
                  </tr>
                  <tr>
                      <td>(1)</td>
                      <td>FURNIZIMI ME INVENTAR PËR NEVOJAT E QKMF-se</td>
                      <td>N.N.SH: “Xhema Com”</td>
                      <td>SHPK.,,PRO MIX. Servis”</td>
                      <td>2008/11/28</td>
                      <td>$162,700</td>
                  </tr>
                  <tr>
                      <td>(6)</td>
                      <td>FURNIZIMI ME INVENTAR PËR NEVOJAT E QKMF-se</td>
                      <td>N.P.SH. “ ELIONI.COM “</td>
                      <td>SHPK.,,PRO MIX. Servis”</td>
                      <td>2012/12/02</td>
                      <td>$372,000</td>
                  </tr>
                  <tr>
                      <td>(3)</td>
                      <td>2 “Furnizim me material administrativ dhe tonera të ndryshëm”</td>
                      <td>OFFICE 1 KOSOVA SH.P.K.</td>
                      <td>SHPK.,,PRO MIX. Servis”</td>
                      <td>2012/12/02</td>
                      <td>$372,000</td>
                  </tr>
                  <tr>
                      <td>(2)</td>
                      <td>2 “Furnizim me material administrativ dhe tonera të ndryshëm”</td>
                      <td>OFFICE 1 KOSOVA SH.P.K.</td>
                      <td>SHPK.,,PRO MIX. Servis”</td>
                      <td>2012/12/02</td>
                      <td>$372,000</td>
                  </tr>
                  <tr>
                      <td>(1)</td>
                      <td>2 “Furnizim me material administrativ dhe tonera të ndryshëm”</td>
                      <td>OFFICE 1 KOSOVA SH.P.K.</td>
                      <td>SHPK.,,PRO MIX. Servis”</td>
                      <td>2012/12/02</td>
                      <td>$372,000</td>
                  </tr>
                  <tr>
                      <td>(8)</td>
                      <td>2 “Furnizim me material administrativ dhe tonera të ndryshëm”</td>
                      <td>OFFICE 1 KOSOVA SH.P.K.</td>
                      <td>SHPK.,,PRO MIX. Servis”</td>
                      <td>2012/12/02</td>
                      <td>$372,000</td>
                  </tr>
                  <tr>
                      <td>(7)</td>
                      <td>2 “Furnizim me material administrativ dhe tonera të ndryshëm”</td>
                      <td>OFFICE 1 KOSOVA SH.P.K.</td>
                      <td>SHPK.,,PRO MIX. Servis”</td>
                      <td>2012/12/02</td>
                      <td>$372,000</td>
                  </tr>
                  <tr>
                      <td>(7)</td>
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
        <div class="container">
          <div class="container p-0 mt-3 asd" align="center">
          <div class="row mt-3 ml-05 mr-05">
            <div class="col-md-12 col-lg-3 p-0" align="center">
              <div class="base4 d-flex">
                  <div class="col-1"><span class="dot"><img class="imgpos" src="img/group20.svg"></span></div>
                  <div class="col-11 margtop"><span class="totaltenders3">15,459</span><br><span class="totaltenders4">Totali i tenderëve me flamuj të kuq</span></div>
              </div>
              <div class="base6 col mt-2 p-0">
                <p class="top10 pl-3 pt-3 rgbred mb-0 ml-3 mr-3 mt-2">Top 10 autoritetet kontraktuese me më së shumti flamuj të kuq</p><hr class="stili90">
                  <div class="row pl-2">
                    <div class="col-2 pr-0">
                      <img src="img/icon.svg">
                      <p class="nrcolor">13</p>
                    </div>
                    <div class="col-10">
                      <p class="undertank1">N.P.T.,,PRO MIX’’</p>
                    </div>
                  </div>
                  <hr class="stili90">
                  <div class="row pl-2">
                    <div class="col-2 pr-0">
                      <img src="img/icon.svg">
                      <p class="nrcolor">13</p>
                    </div>
                    <div class="col-9">
                      <p class="undertank1">N.P.T.,,PRO MIX’’</p>
                    </div>
                  </div>
                  <hr class="stili90">
                  <div class="row pl-2">
                    <div class="col-2 pr-0">
                      <img src="img/icon.svg">
                      <p class="nrcolor">13</p>
                    </div>
                    <div class="col-10">
                      <p class="undertank1">N.P.T.,,PRO MIX’’</p>
                    </div>
                  </div>
                  <hr class="stili90">
                  <div class="row pl-2">
                    <div class="col-2 pr-0">
                      <img src="img/icon.svg">
                      <p class="nrcolor">13</p>
                    </div>
                    <div class="col-10">
                      <p class="undertank1">N.P.T.,,PRO MIX’’</p>
                    </div>
                  </div>
                  <hr class="stili90">
                  <div class="row pl-2">
                    <div class="col-2 pr-0">
                      <img src="img/icon.svg">
                      <p class="nrcolor">13</p>
                    </div>
                    <div class="col-10">
                      <p class="undertank1">N.P.T.,,PRO MIX’’</p>
                    </div>
                  </div>
                  <hr class="stili90">
                  <div class="row pl-2">
                    <div class="col-2 pr-0">
                      <img src="img/icon.svg">
                      <p class="nrcolor">13</p>
                    </div>
                    <div class="col-10">
                      <p class="undertank1">N.P.T.,,PRO MIX’’</p>
                    </div>
                  </div>
                  <hr class="stili90">
                  <div class="row pl-2">
                    <div class="col-2 pr-0">
                      <img src="img/icon.svg">
                      <p class="nrcolor">13</p>
                    </div>
                    <div class="col-10">
                      <p class="undertank1">N.P.T.,,PRO MIX’’</p>
                    </div>
                  </div>
                  <hr class="stili90">
                  <div class="row pl-2">
                    <div class="col-2 pr-0">
                      <img src="img/icon.svg">
                      <p class="nrcolor">13</p>
                    </div>
                    <div class="col-10">
                      <p class="undertank1">N.P.T.,,PRO MIX’’</p>
                    </div>
                  </div>
                  <hr class="stili90">
                  <div class="row pl-2">
                    <div class="col-2 pr-0">
                      <img src="img/icon.svg">
                      <p class="nrcolor">13</p>
                    </div>
                    <div class="col-10">
                      <p class="undertank1">N.P.T.,,PRO MIX’’</p>
                    </div>
                  </div>
                  <hr class="stili90">
                  <div class="row pl-2">
                    <div class="col-2 pr-0">
                      <img src="img/icon.svg">
                      <p class="nrcolor">13</p>
                    </div>
                    <div class="col-10">
                      <p class="undertank1">N.P.T.,,PRO MIX’’</p>
                    </div>
                  </div>
              </div>
            </div>
            <div class="col-md-12 col-lg-6 p-0" align="center">
              <div class="base5">
                <p class="userretention paddings">Rradhitja e tenderëve në bazë të numrit të flamujve të kuq</p>
                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12 paddings">
                    <p class="risk">Ndërtimi I tre rezervarëve të ujit për ujësjellsa ne fshatrat e KK Novobërdë Ndërtimi I tre rezervarëve të… ujit për ujësjellsa ne fshatrat e KK Novo</p>
                    <p class="risk">2 “ Furnizim me artikuj ushqimor për qerdhe,shtëpin e komunitetit,dita të shkollave dhe familje me nevojëRi… tenderim</p>
                    <p class="risk">2 “Furnizim me material administrativ dhe tonera të ndryshëm”</p>
                    <p class="risk">FURNIZIMI ME INVENTAR PËR NEVOJAT E QKMF-se</p>
                    <p class="risk">RI TENDERServisimi i Aparateve kundër zjarrit për Gjykaten Themelore Mitrovicë me degët e saj në… Regjionin e Mitrovices</p>
                    <p class="risk">“Furnizim me material për zyre për nevojat e Komunës Shtërpcë dhe shkollave ne teritorin e komunës Shtë… dhe mjekësis familjare në teritorin e komunës Shtërpcë</p>
                  </div>
                  <div class="col-12 col-sm-12 col-md-12 col-lg-12 paddings">
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
            
            <div class="col-md-12 col-lg-3 p-0" align="center">
              <div class="base7">
              <div class="col">
                <p class="top10 pl-3 pt-3 rgbred mt-2">Radhitja e indikatorëve në bazë të numrit të flamujve të kuq</p><hr class="stili90">
                    <div class="row">
                      <div class="col-2 pr-0">
                        <img src="img/icon.svg">
                        <p class="nrcolor">13</p>
                      </div>
                      <div class="col-10">
                        <p class="undertank1">Mungesë konkurrence</p>
                      </div>
                    </div>
                    <hr class="stili90">
                    <div class="row">
                      <div class="col-2 pr-0">
                        <img src="img/icon.svg">
                        <p class="nrcolor">6</p>
                      </div>
                      <div class="col-10">
                        <p class="undertank1">Mungesë Gare, Negocim i Drejtpërdrejtë</p>
                      </div>
                    </div>
                    <hr class="stili90">
                    <div class="row">
                      <div class="col-2 pr-0">
                        <img src="img/icon.svg">
                        <p class="nrcolor">4</p>
                      </div>
                      <div class="col-10">
                        <p class="undertank1">Pamundësi kohore për përgatitje të një oferte</p>
                      </div>
                    </div>
                    <hr class="stili90">
                    <div class="row">
                      <div class="col-2 pr-0">
                        <img src="img/icon.svg">
                        <p class="nrcolor">4</p>
                      </div>
                      <div class="col-10">
                        <p class="undertank1">N.P.T.,,PRO MIX’’</p>
                      </div>
                    </div>
                    <hr class="stili90">
                    <div class="row">
                      <div class="col-2 pr-0">
                        <img src="img/icon.svg">
                        <p class="nrcolor">4</p>
                      </div>
                      <div class="col-10">
                        <p class="undertank1">N.P.T.,,PRO MIX’’</p>
                      </div>
                    </div>
                    <hr class="stili90">
                    <div class="row">
                      <div class="col-2 pr-0">
                        <img src="img/icon.svg">
                        <p class="nrcolor">4</p>
                      </div>
                      <div class="col-10">
                        <p class="undertank1">N.P.T.,,PRO MIX’’</p>
                      </div>
                    </div>
                    <hr class="stili90">
                    <div class="row">
                      <div class="col-2 pr-0">
                        <img src="img/icon.svg">
                        <p class="nrcolor">4</p>
                      </div>
                      <div class="col-10">
                        <p class="undertank1">N.P.T.,,PRO MIX’’</p>
                      </div>
                    </div>
                    <hr class="stili90">
                    <div class="row">
                      <div class="col-2 pr-0">
                        <img src="img/icon.svg">
                        <p class="nrcolor">4</p>
                      </div>
                      <div class="col-10">
                        <p class="undertank1">N.P.T.,,PRO MIX’’</p>
                      </div>
                    </div>
                    <hr class="stili90">
                    <div class="row">
                      <div class="col-2 pr-0">
                        <img src="img/icon.svg">
                        <p class="nrcolor">4</p>
                      </div>
                      <div class="col-10">
                        <p class="undertank1">N.P.T.,,PRO MIX’’</p>
                      </div>
                    </div>
                    <hr class="stili90">
                    <div class="row">
                      <div class="col-2 pr-0">
                        <img src="img/icon.svg">
                        <p class="nrcolor">4</p>
                      </div>
                      <div class="col-10">
                        <p class="undertank1">N.P.T.,,PRO MIX’’</p>
                      </div>
                    </div>
                    <hr class="stili90">
                    <div class="row">
                      <div class="col-2 pr-0">
                        <img src="img/icon.svg">
                        <p class="nrcolor">4</p>
                      </div>
                      <div class="col-10">
                        <p class="undertank1">N.P.T.,,PRO MIX’’</p>
                      </div>
                    </div>
                </div>
              </div>
                </div>
              </div>
            </div>
</div>
          </span>
        </div>
      </span>
      </div>

  <!-- The footer -->
<div class="row footer1 mt-3">
  <div class="container">
    <div class="row ml-05 mr-05 dsa">
      <div class="col-4 col-lg-4 align-self-center pl-0"><p class="copyright1">COPYRIGHT © 2019 / DPLUS</p></div>
      <div class="col-4 col-lg-4 align-self-center" style="text-align:center"><p class="copyright1">PËRKRAHUR NGA: <img src="img/usaid.svg"></div>
      <div class="col-4 col-lg-4 align-self-center pr-0" style="text-align:right"><p class="copyright1">PËR NE / KUFIZIMET E PORTALIT / ABONOHU</p></div>
    </div>
  </div>
</div>
</body>
<footer>
  <style type="text/css">

  </style>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/multiple-select@1.3.1/dist/multiple-select.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
   <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js" type="text/javascript"></script>
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
    // $.fn.DataTable.ext.classes.sPageButton = 'button primary_button';
    var table1 = $('#dtHorizontalExample').DataTable( {
        rowReorder: {
            selector: 'td:nth-child(2)'
        },
        pageLength: 10,
        responsive: true,
        lengthChange: false,
    });
    
    var table = $('#dataShownTable').DataTable( {
      responsive: true,
      bLengthChange: false,
      bInfo: false,
        columnDefs: [
            {
               rowReorder: {
                  selector: 'td:nth-child(2)'
              },
                targets: [ 0, 1, 2 ],
                className: 'mdl-data-table__cell--non-numeric',
                lengthChange: false,
                pageLength: 10,

            }
        ],
    } );

    $('.searchbarsize').keyup(function(){
      table.search($(this).val()).draw() ;
    });

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

  $(document).ready(function(){
    $(".bookingTd").tooltip();
  });
    </script>
  </footer>
</html>
