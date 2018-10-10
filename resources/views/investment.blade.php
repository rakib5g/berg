@extends('layouts.frontend.app')
@section('title', 'Investment')
@push('css')
@endpush

@section('content')
    <!--Starts Investment intro section-->
  <section id="investment-image" class="py-5 text-center text-light text-justify">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 ">
          <div class="home-article">
            <h1 class="font-weight-bold text-light">Share dealing: charges and fees</h1>
            <p class="lead font-weight-bold">We are always transparent with our charges, so you know what costs you may incur when you trade with us.</p>
            <p class="lead font-weight-bold mt-5">Your capital is at risk</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="investment">
    <nav class="navbar navbar-expand-md navbar-dark" uk-sticky="top: 100; animation: uk-animation-slide-top; bottom: #sticky-on-scroll-up">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navBar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navBar">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item"><a class="nav-link btn btn-primary" href="#Stocks">Stocks</a></li>
            <li class="nav-item"><a class="nav-link btn btn-primary" href="#ETFs">ETFs</a></li>
            <li class="nav-item"><a class="nav-link btn btn-primary" href="#Funds">Funds</a></li>
            <li class="nav-item"><a class="nav-link btn btn-primary" href="#Bonds">Bonds</a></li>
            <li class="nav-item"><a class="nav-link btn btn-primary" href="#Futures-and-options">Futures and options</a></li>
            <li class="nav-item"><a class="nav-link btn btn-primary" href="#Structured-products">Structured products</a></li>
            <li class="nav-item"><a class="nav-link btn btn-primary" href="#Commodities">Commodities</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </section>
  <!--End of Investment intro section-->

  <!--Starts comission-charges section-->
  <section id="Stocks" class="py-5 text-center text-justify">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 ">
          <div class="home-article">
            <h1 class=" font-weight-bold">Commission charges</h1>
            <h3 class="font-weight-bold  mt-5">UK shares</h3>
            <p class="font-weight-bold">If you don't have a spread betting or CFD account that's accessible under the same login as your share dealing account, or you've not placed at least one spread bet or CFD trade in the previous month, your commission on UK stocks will be determined
              based on your share-dealing activity.</p>

            <table>
              <tr>
                <th>Number of trades (in previous month)</th>
                <th>Commission per trade*</th>
                <th>Minimum charge online</th>
                <th>Minimum charge phone</th>
              </tr>
              <tr>
                <td>10+ trades</td>
                <td>£5</td>
                <td>£5</td>
                <td>£5</td>
              </tr>
              <tr>
                <td>0-9 trades</td>
                <td>£8</td>
                <td>£8</td>
                <td>£40</td>
              </tr>
            </table>
            <p class="font-weight-bold mt-3">* Please note that rates are valid up to £25,000 trade consideration. Rates above this trade size are agreed by negotiation. Please call 0207 663 0336.</p>
            <p class="font-weight-bold">If execution of a trade takes place over multiple days, you will be charged commission for each day where a proportion of the trade is filled.</p>


            <h3 class="font-weight-bold  mt-5">International shares</h3>
            <p class="font-weight-bold">For all other shares, we charge the following:</p>

            <table>
              <tr>
                <th>Region</th>
                <th>Commission per trade</th>
                <th>Minimum charge online</th>
                <th>Minimum charge phone</th>
              </tr>
              <tr>
                <td>USA</td>
                <td>2 cents per share</td>
                <td>$15</td>
                <td>$50</td>
              </tr>
              <tr>
                <td>Ireland</td>
                <td>0.1%</td>
                <td>€10</td>
                <td>€50</td>
              </tr>
              <tr>
                <td>Germany</td>
                <td>0.1%</td>
                <td>€10</td>
                <td>€50</td>
              </tr>
              <tr>
                <td>Netherlands</td>
                <td>0.1%</td>
                <td>€10</td>
                <td>€50</td>
              </tr>
              <tr>
                <td>Belgium</td>
                <td>0.1%</td>
                <td>€10</td>
                <td>€50</td>
              </tr>
              <tr>
                <td>Austria</td>
                <td>0.1%</td>
                <td>€10</td>
                <td>€50</td>
              </tr>
              <tr>
                <td>Australia</td>
                <td>0.1%</td>
                <td>A$10</td>
                <td>A$50</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End of comission-charges section-->

  <!--Starts FAQ Section-->
  <section id="accordion" class="py-4 bg-dark text-light">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h6 class="display-4 mb-3 text-success">FAQ for Commission charges</h6>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-md-6">
          <div class="card bg-light text-dark">
            <div class="card-header" id="heading-one">
              <h5 class="mb-0">
              <a href=".collapse-1" class="text-dark" data-toggle="collapse">
              Question-one?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-1" data-parent="#accordion">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

          <div class="card bg-light text-dark mt-2">
            <div class="card-header" id="heading-two">
              <h5 class="mb-0">
              <a href=".collapse-2" class="text-dark" data-toggle="collapse" >
              Question-two?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-2" data-parent="#accordion">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

          <div class="card bg-light text-dark mt-2">
            <div class="card-header" id="heading-three">
              <h5 class="mb-0">
              <a href=".collapse-3" class="text-dark" data-toggle="collapse">
              Question-three?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-3" data-parent="#accordion">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

        </div>


        <div class="col-md-6">
          <div class="card bg-light text-dark">
            <div class="card-header" id="heading-four">
              <h5 class="mb-0">
              <a href=".collapse-4" class="text-dark" data-toggle="collapse">
              Question-four?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-4" data-parent="#accordion">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

          <div class="card bg-light text-dark mt-2">
            <div class="card-header" id="heading-five">
              <h5 class="mb-0">
              <a href=".collapse-5" class="text-dark" data-toggle="collapse" >
              Question-five?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-5" data-parent="#accordion">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

          <div class="card bg-light text-dark mt-2">
            <div class="card-header" id="heading-six">
              <h5 class="mb-0">
              <a href=".collapse-6" class="text-dark" data-toggle="collapse">
              Question-six?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-6" data-parent="#accordion">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </section>
  <!--End of FAQ section-->


  <!--Starts available-markets section-->
  <section id="market-details" class="py-5 text-justify">
    <div class="container-fluid" id="ETFs">
      <div class="row">
        <div class="col-md-4 text-center">
          <h1 class="font-weight-bold">Available markets </h1>
        </div>
        <div class="col-md-8">
          <div class="invest-article">
            <h6 class="font-weight-bold mt-4">We quote more than 9000 shares from the following stock indices in local denominations. </h6>
            <ul class="font-weight-bold">
              <li>UK: FTSE 100, FTSE 250 and many other small cap UK stocks</li>
              <li>US: S&P 500, NASDAQ 100 and many other small cap US stocks</li>
              <li>Germany: DAX, HDAX, MDAX</li>
              <li>Ireland: ISEQ</li>
              <li>Netherlands: AEX</li>
              <li>Belgium: BEL 20</li>
              <li>Austria: ATX, WBI</li>
              <li>Australia: ASX/S&P 300</li>
            </ul>
            <p class="lead font-weight-bold">If you are looking for a specific stock that you can't find on our platform, please call us on 0800 028 8550 to discuss your individual requirements.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End of available-markets section-->

  <!--Starts FAQ Section-->
  <section id="accordion-2" class="py-4 bg-dark text-light">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h6 class="display-4 mb-3 text-success">FAQ for Commission charges</h6>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-md-6">
          <div class="card bg-light text-dark">
            <div class="card-header" id="heading-one">
              <h5 class="mb-0">
              <a href=".collapse-7" class="text-dark" data-toggle="collapse">
              Question-one?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-7" data-parent="#accordion-2">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

          <div class="card bg-light text-dark mt-2">
            <div class="card-header" id="heading-two">
              <h5 class="mb-0">
              <a href=".collapse-8" class="text-dark" data-toggle="collapse" >
              Question-two?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-8" data-parent="#accordion-2">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

          <div class="card bg-light text-dark mt-2">
            <div class="card-header" id="heading-three">
              <h5 class="mb-0">
              <a href=".collapse-9" class="text-dark" data-toggle="collapse">
              Question-three?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-9" data-parent="#accordion-2">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

        </div>


        <div class="col-md-6">
          <div class="card bg-light text-dark">
            <div class="card-header" id="heading-four">
              <h5 class="mb-0">
              <a href=".collapse-10" class="text-dark" data-toggle="collapse">
              Question-four?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-10" data-parent="#accordion-2">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

          <div class="card bg-light text-dark mt-2">
            <div class="card-header" id="heading-five">
              <h5 class="mb-0">
              <a href=".collapse-11" class="text-dark" data-toggle="collapse" >
              Question-five?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-11" data-parent="#accordion-2">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

          <div class="card bg-light text-dark mt-2">
            <div class="card-header" id="heading-six">
              <h5 class="mb-0">
              <a href=".collapse-12" class="text-dark" data-toggle="collapse">
              Question-six?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-12" data-parent="#accordion-2">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </section>
  <!--End of FAQ section-->



  <!--Starts Trading-international-shares section-->
  <section id="market-details-1" class="py-5 text-justify">
    <div class="container-fluid" id="Funds">
      <div class="row">
        <div class="col-md-4 text-center">
          <h1 class="font-weight-bold">Trading international shares</h1>
        </div>
        <div class="col-md-8">
          <div class="invest-article">
            <p class="font-weight-bold">Buy and sell more than 9000 international shares with your IG share dealing account. </p>
            <p class="font-weight-bold">Prices are offered in local denominations so you know exactly what you're paying, and our fee to convert to your chosen base currency is just 0.3%. </p>
            <p class="font-weight-bold">Obtaining live prices from an exchange can incur a monthly fee.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End of Trading-international-shares section-->

  <!--Starts FAQ Section-->
  <section id="accordion-3" class="py-4 bg-dark text-light">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h6 class="display-4 mb-3 text-success">FAQ for Trading international shares</h6>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-md-6">
          <div class="card bg-light text-dark">
            <div class="card-header" id="heading-one">
              <h5 class="mb-0">
              <a href=".collapse-13" class="text-dark" data-toggle="collapse">
              Question-one?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-13" data-parent="#accordion-3">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

          <div class="card bg-light text-dark mt-2">
            <div class="card-header" id="heading-two">
              <h5 class="mb-0">
              <a href=".collapse-14" class="text-dark" data-toggle="collapse" >
              Question-two?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-14" data-parent="#accordion-3">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

          <div class="card bg-light text-dark mt-2">
            <div class="card-header" id="heading-three">
              <h5 class="mb-0">
              <a href=".collapse-15" class="text-dark" data-toggle="collapse">
              Question-three?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-15" data-parent="#accordion-3">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

        </div>


        <div class="col-md-6">
          <div class="card bg-light text-dark">
            <div class="card-header" id="heading-four">
              <h5 class="mb-0">
              <a href=".collapse-16" class="text-dark" data-toggle="collapse">
              Question-four?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-16" data-parent="#accordion-3">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

          <div class="card bg-light text-dark mt-2">
            <div class="card-header" id="heading-five">
              <h5 class="mb-0">
              <a href=".collapse-17" class="text-dark" data-toggle="collapse" >
              Question-five?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-17" data-parent="#accordion-3">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

          <div class="card bg-light text-dark mt-2">
            <div class="card-header" id="heading-six">
              <h5 class="mb-0">
              <a href=".collapse-18" class="text-dark" data-toggle="collapse">
              Question-six?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-18" data-parent="#accordion-3">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </section>
  <!--End of FAQ section-->



  <!--Starts ISA-charges-and-limits section-->
  <section id="market-details" class="py-5 text-justify">
    <div class="container-fluid" id="Bonds">
      <div class="row">
        <div class="col-md-4 text-center">
          <h1 class="font-weight-bold">ISA charges and limits</h1>
        </div>
        <div class="col-md-8 ">
          <div class="invest-article">
            <h6 class="font-weight-bold mt-4">ISA charges and limits are similar to our regular share dealing charges:</h6>
            <ul class="font-weight-bold">
              <li>Free set-up, with free transfers for electronic shares1</li>
              <li>Annual allowance of £20,000 for 2018/19</li>
              <li>Commission charges as above</li>
            </ul>
            <p class="font-weight-bold">1Physical share dematerialisation fee is £100 (inclusive of VAT) per CREST transfer form. Electronic shares are transferred free of charge. IG SIPPs are administered by James Hay, who charge a £195 annual fee and may charge for transferring
              investments not currently held in a SIPP. You may be out of the market for a period while your transfer takes place.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End of ISA-charges-and-limits section-->

  <!--Starts FAQ Section-->
  <section id="accordion-4" class="py-4 bg-dark text-light">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h6 class="display-4 mb-3 text-success">FAQ for ISA charges and limits</h6>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-md-6">
          <div class="card bg-light text-dark">
            <div class="card-header" id="heading-one">
              <h5 class="mb-0">
              <a href=".collapse-19" class="text-dark" data-toggle="collapse">
              Question-one?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-19" data-parent="#accordion-4">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

          <div class="card bg-light text-dark mt-2">
            <div class="card-header" id="heading-two">
              <h5 class="mb-0">
              <a href=".collapse-20" class="text-dark" data-toggle="collapse" >
              Question-two?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-20" data-parent="#accordion-4">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

          <div class="card bg-light text-dark mt-2">
            <div class="card-header" id="heading-three">
              <h5 class="mb-0">
              <a href=".collapse-21" class="text-dark" data-toggle="collapse">
              Question-three?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-21" data-parent="#accordion-4">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

        </div>


        <div class="col-md-6">
          <div class="card bg-light text-dark">
            <div class="card-header" id="heading-four">
              <h5 class="mb-0">
              <a href=".collapse-22" class="text-dark" data-toggle="collapse">
              Question-four?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-22" data-parent="#accordion-4">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

          <div class="card bg-light text-dark mt-2">
            <div class="card-header" id="heading-five">
              <h5 class="mb-0">
              <a href=".collapse-23" class="text-dark" data-toggle="collapse" >
              Question-five?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-23" data-parent="#accordion-4">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

          <div class="card bg-light text-dark mt-2">
            <div class="card-header" id="heading-six">
              <h5 class="mb-0">
              <a href=".collapse-24" class="text-dark" data-toggle="collapse">
              Question-six?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-24" data-parent="#accordion-4">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </section>
  <!--End of FAQ section-->


  <!--Starts SIPP-charges-and-limits section-->
  <section id="market-details-1" class="py-5 text-justify">
    <div class="container-fluid" id="Futures-and-options">
      <div class="row">
        <div class="col-md-4 text-center">
          <h1 class="font-weight-bold">SIPP charges and limits </h1>
        </div>
        <div class="col-md-8">
          <div class="invest-article">
            <h6 class="font-weight-bold mt-4">IG SIPPs are administered by James Hay, under the James Hay Modular iPlan. So while there is no IG charge for adding a SIPP, you will have to pay an annual fee of £195 to James Hay to start investing.</h6>
            <ul class="font-weight-bold">
              <li>£195 annual admin fee (payable to James Hay)</li>
              <li>No fees for transferring your SIPP</li>
              <li>James Hay may charge fees for certain actions within your SIPP, see their charges schedule for more information</li>
              <li>Tax-relief available up to current annual earned income, to a maximum of £40,000/li>
                <li>Commission charges as above</li>
            </ul>
            <p class="lead font-weight-bold">Tax laws are subject to change and depend on individual circumstances. Tax law may differ in a jurisdiction other than the UK.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End of SIPP-charges-and-limits section-->

  <!--Starts FAQ Section-->
  <section id="accordion-5" class="py-4 bg-dark text-light">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h6 class="display-4 mb-3 text-success">FAQ for SIPP charges and limits</h6>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-md-6">
          <div class="card bg-light text-dark">
            <div class="card-header" id="heading-one">
              <h5 class="mb-0">
              <a href=".collapse-19" class="text-dark" data-toggle="collapse">
              Question-one?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-19" data-parent="#accordion-5">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

          <div class="card bg-light text-dark mt-2">
            <div class="card-header" id="heading-two">
              <h5 class="mb-0">
              <a href=".collapse-20" class="text-dark" data-toggle="collapse" >
              Question-two?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-20" data-parent="#accordion-5">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

          <div class="card bg-light text-dark mt-2">
            <div class="card-header" id="heading-three">
              <h5 class="mb-0">
              <a href=".collapse-21" class="text-dark" data-toggle="collapse">
              Question-three?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-21" data-parent="#accordion-5">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

        </div>


        <div class="col-md-6">
          <div class="card bg-light text-dark">
            <div class="card-header" id="heading-four">
              <h5 class="mb-0">
              <a href=".collapse-22" class="text-dark" data-toggle="collapse">
              Question-four?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-22" data-parent="#accordion-5">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

          <div class="card bg-light text-dark mt-2">
            <div class="card-header" id="heading-five">
              <h5 class="mb-0">
              <a href=".collapse-23" class="text-dark" data-toggle="collapse" >
              Question-five?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-23" data-parent="#accordion-5">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

          <div class="card bg-light text-dark mt-2">
            <div class="card-header" id="heading-six">
              <h5 class="mb-0">
              <a href=".collapse-24" class="text-dark" data-toggle="collapse">
              Question-six?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-24" data-parent="#accordion-5">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </section>
  <!--End of FAQ section-->


  <!--Starts Free-transfers-for-electronic-shares section-->
  <section id="market-details" class="py-5 text-justify">
    <div class="container-fluid" id="Structured-products">
      <div class="row">
        <div class="col-md-4 text-center">
          <h1 class="font-weight-bold">Free transfers for electronic shares </h1>
        </div>
        <div class="col-md-8">
          <div class="invest-article">
            <h6 class="font-weight-bold mt-4">Consolidate your share holdings by transferring any existing stocks to your IG share dealing account, with no charge for electronic shares1:</h6>
            <ul class="font-weight-bold">
              <li>Free transfer of UK stocks in / out</li>
              <li>Free transfer of UK stocks and shares ISA in / out</li>
              <li>Free transfer of UK SIPP in / out</li>
            </ul>
            <p class="font-weight-bold">1Physical share dematerialisation fee is £100 (inclusive of VAT) per CREST transfer form. Electronic shares are transferred free of charge. IG SIPPs are administered by James Hay, who charge a £195 annual fee and may charge for transferring
              investments not currently held in a SIPP. You may be out of the market for a period while your transfer takes place.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End of Free-transfers-for-electronic-shares section-->

  <!--Starts FAQ Section-->
  <section id="accordion-6" class="py-4 bg-dark text-light">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h6 class="display-4 mb-3 text-success">FAQ for Free transfers for electronic shares</h6>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-md-6">
          <div class="card bg-light text-dark">
            <div class="card-header" id="heading-one">
              <h5 class="mb-0">
              <a href=".collapse-25" class="text-dark" data-toggle="collapse">
              Question-one?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-25" data-parent="#accordion-6">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

          <div class="card bg-light text-dark mt-2">
            <div class="card-header" id="heading-two">
              <h5 class="mb-0">
              <a href=".collapse-26" class="text-dark" data-toggle="collapse" >
              Question-two?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-26" data-parent="#accordion-6">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

          <div class="card bg-light text-dark mt-2">
            <div class="card-header" id="heading-three">
              <h5 class="mb-0">
              <a href=".collapse-27" class="text-dark" data-toggle="collapse">
              Question-three?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-27" data-parent="#accordion-6">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

        </div>


        <div class="col-md-6">
          <div class="card bg-light text-dark">
            <div class="card-header" id="heading-four">
              <h5 class="mb-0">
              <a href=".collapse-28" class="text-dark" data-toggle="collapse">
              Question-four?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-28" data-parent="#accordion-6">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

          <div class="card bg-light text-dark mt-2">
            <div class="card-header" id="heading-five">
              <h5 class="mb-0">
              <a href=".collapse-29" class="text-dark" data-toggle="collapse" >
              Question-five?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-29" data-parent="#accordion-6">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

          <div class="card bg-light text-dark mt-2">
            <div class="card-header" id="heading-six">
              <h5 class="mb-0">
              <a href=".collapse-30" class="text-dark" data-toggle="collapse">
              Question-six?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-30" data-parent="#accordion-6">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </section>
  <!--End of FAQ section-->


  <!--Starts Foreign exchange section-->
  <section id="market-details-1" class="py-5 text-justify">
    <div class="container-fluid" >
      <div class="row">
        <div class="col-md-4 text-center">
          <h1 class="font-weight-bold">Foreign exchange</h1>
        </div>
        <div class="col-md-8">
          <div class="invest-article">
            <h6 class="font-weight-bold mt-4">For relevant transactions, we will convert currencies at the time of execution based on the best available bid / offer exchange rates, plus our spread of 0.3%.</h6>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End of Foreign exchange section-->

  <!--Starts FAQ Section-->
  <section id="accordion-7" class="py-4 bg-dark text-light">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h6 class="display-4 mb-3 text-success">FAQ for Foreign exchange</h6>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-md-6">
          <div class="card bg-light text-dark">
            <div class="card-header" id="heading-one">
              <h5 class="mb-0">
              <a href=".collapse-31" class="text-dark" data-toggle="collapse">
              Question-one?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-31" data-parent="#accordion-7">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

          <div class="card bg-light text-dark mt-2">
            <div class="card-header" id="heading-two">
              <h5 class="mb-0">
              <a href=".collapse-32" class="text-dark" data-toggle="collapse" >
              Question-two?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-32" data-parent="#accordion-7">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

          <div class="card bg-light text-dark mt-2">
            <div class="card-header" id="heading-three">
              <h5 class="mb-0">
              <a href=".collapse-33" class="text-dark" data-toggle="collapse">
              Question-three?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-33" data-parent="#accordion-7">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

        </div>


        <div class="col-md-6">
          <div class="card bg-light text-dark">
            <div class="card-header" id="heading-four">
              <h5 class="mb-0">
              <a href=".collapse-34" class="text-dark" data-toggle="collapse">
              Question-four?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-34" data-parent="#accordion-7">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

          <div class="card bg-light text-dark mt-2">
            <div class="card-header" id="heading-five">
              <h5 class="mb-0">
              <a href=".collapse-35" class="text-dark" data-toggle="collapse" >
              Question-five?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-35" data-parent="#accordion-7">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

          <div class="card bg-light text-dark mt-2">
            <div class="card-header" id="heading-six">
              <h5 class="mb-0">
              <a href=".collapse-36" class="text-dark" data-toggle="collapse">
              Question-six?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-36" data-parent="#accordion-7">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </section>
  <!--End of FAQ section-->


  <!--Starts Other-fees section-->
  <section id="market-details" class="py-5 text-justify">
    <div class="container-fluid" id="Commodities">
      <div class="row">
        <div class="col-md-4 text-center">
          <h1 class="font-weight-bold">Other fees</h1>
        </div>
        <div class="col-md-8">
          <div class="invest-article">
            <table class="text-center tbl">
              <tr>
                <th>Transaction</th>
                <th>Fee</th>
              </tr>
              <tr>
                <td>Standard bank transfer</td>
                <td>Free</td>
              </tr>
              <tr>
                <td>Voting on company matters</td>
                <td>Free</td>
              </tr>
              <tr>
                <td>Same-day bank transfer</td>
                <td>More than £100: Free <br> Less than £100: £15
                </td>
              </tr>
              <tr>
                <td>International bank transfer</td>
                <td>Free (although there may be <br> a charge from the bank side)</td>
              </tr>
              <tr>
                <td>Physical share<br> certificate dematerialisation</td>
                <td>Each £100 (inclusive of VAT)</td>
              </tr>
              <tr>
                <td>Custody fee2</td>
                <td>£24 per quarter, charged if you hold<br> share dealing or ISA investments at the end of<br> the quarter.</td>
              </tr>
              <tr>
                <td>Additional services3</td>
                <td>Each £100 plus VAT</td>
              </tr>
              <tr>
                <td>Deposit fee</td>
                <td>Free if you make a deposit via credit card or PayPal</td>
              </tr>
            </table>
            <hr class="mt-5">

            <p class="font-weight-bold">Physical share dematerialisation fee is £100 (inclusive of VAT) per CREST transfer form. Electronic shares are transferred free of charge. IG SIPPs are administered by James Hay, who charge a £195 annual fee and may charge for transferring
              investmentsnot currently held in a SIPP. You may be out of the market for a period while your transfer takes place.</p>
            <ul class="font-weight-bold">
              <li>Deal three or more times across any of your IG accounts during the quarter
                <strong> OR</strong></li>
              <li>Hold investments worth £15,000 or more across your IG Smart Portfolio accounts at the end of the quarter</li>
            </ul>
            <p class="font-weight-bold">If a custody fee is due, we’ll debit it from your share dealing account first. If sufficient funds aren’t available, we’ll then deduct from your ISA account. If there is insufficient cash on both accounts, the account with the highest asset
              value will be taken overdrawn. </p>
            <p class="font-weight-bold"> Additional services include repair or voiding of an ISA and the following optional services: recertification, arranging AGM attendance and receiving hard copies of company reports.</p>
            <h3 class="font-weight-bold">Additional notes:</h3>
            <p class="font-weight-bold"> There may be additional charges and taxes for particular instruments that you trade that are charged by the particular market. Please call us on 0800 028 8550 for further details.</p>
            <p class="font-weight-bold">We may charge you a fee if we are required to perform a service on your behalf that is not set out in our product details.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End of Other-fees section-->

  <!--Starts FAQ Section-->
  <section id="accordion-8" class="py-4 bg-dark text-light">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h6 class="display-4 mb-3 text-success">FAQ for Other fees</h6>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-md-6">
          <div class="card bg-light text-dark">
            <div class="card-header" id="heading-one">
              <h5 class="mb-0">
              <a href=".collapse-37" class="text-dark" data-toggle="collapse">
              Question-one?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-37" data-parent="#accordion-8">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

          <div class="card bg-light text-dark mt-2">
            <div class="card-header" id="heading-two">
              <h5 class="mb-0">
              <a href=".collapse-38" class="text-dark" data-toggle="collapse" >
              Question-two?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-38" data-parent="#accordion-8">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

          <div class="card bg-light text-dark mt-2">
            <div class="card-header" id="heading-three">
              <h5 class="mb-0">
              <a href=".collapse-39" class="text-dark" data-toggle="collapse">
              Question-three?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-39" data-parent="#accordion-8">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

        </div>


        <div class="col-md-6">
          <div class="card bg-light text-dark">
            <div class="card-header" id="heading-four">
              <h5 class="mb-0">
              <a href=".collapse-40" class="text-dark" data-toggle="collapse">
              Question-four?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-40" data-parent="#accordion-8">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

          <div class="card bg-light text-dark mt-2">
            <div class="card-header" id="heading-five">
              <h5 class="mb-0">
              <a href=".collapse-41" class="text-dark" data-toggle="collapse" >
              Question-five?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-41" data-parent="#accordion-8">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

          <div class="card bg-light text-dark mt-2">
            <div class="card-header" id="heading-six">
              <h5 class="mb-0">
              <a href=".collapse-42" class="text-dark" data-toggle="collapse">
              Question-six?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-42" data-parent="#accordion-8">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </section>
  <!--End of FAQ section-->


  <!--Starts Government-taxes-and-levies section-->
  <section id="market-details-1" class="py-5 text-justify">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 text-center">
          <h1 class="font-weight-bold">Government taxes and levies </h1>
        </div>
        <div class="col-md-8">
          <div class="invest-article">
            <h6 class="font-weight-bold">You may be subject to additional trading fees or taxes depending on the country where the share is listed.</h6>
            <table class="text-center">
              <tr>
                <th>Description</th>
                <th>Charge value</th>
                <th>Direction</th>
                <th>Threshold</th>
                <th>Transaction history name</th>
              </tr>
              <tr>
                <td>UK stamp duty reserve tax4</td>
                <td>0.50%</td>
                <td>Buy</td>
                <td>n/a</td>
                <td>SDRT</td>
              </tr>
              <tr>
                <td>UK PTM</td>
                <td>£1</td>
                <td>Both</td>
                <td>£10,000</td>
                <td>PTM levy</td>
              </tr>
              <tr>
                <td>Ireland stamp duty</td>
                <td>1.00%</td>
                <td>Buy</td>
                <td>n/a</td>
                <td>Irish tax</td>
              </tr>
              <tr>
                <td>Ireland ITP</td>
                <td>€1.25</td>
                <td>Both</td>
                <td>€12,500</td>
                <td>ITP Levy</td>
              </tr>
              <tr>
                <td>US on-exchange fee</td>
                <td>0.0013%</td>
                <td>Sell</td>
                <td>n/a</td>
                <td>Section 31 fee</td>
              </tr>
            </table>
            <hr class="mt-5">
            <p class="font-weight-bold">Non-CREST-eligible and CREST-eligible residual stocks are subject to a minimum stamp duty charge of £5.00, rounded up to the nearest £5.00.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End of Government-taxes-and-levies section-->

  <!--Starts FAQ Section-->
  <section id="accordion-9" class="py-4 bg-dark text-light">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h6 class="display-4 mb-3 text-success">FAQ for Government taxes and levies</h6>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-md-6">
          <div class="card bg-light text-dark">
            <div class="card-header" id="heading-one">
              <h5 class="mb-0">
              <a href=".collapse-43" class="text-dark" data-toggle="collapse">
              Question-one?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-43" data-parent="#accordion-9">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

          <div class="card bg-light text-dark mt-2">
            <div class="card-header" id="heading-two">
              <h5 class="mb-0">
              <a href=".collapse-44" class="text-dark" data-toggle="collapse" >
              Question-two?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-44" data-parent="#accordion-9">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

          <div class="card bg-light text-dark mt-2">
            <div class="card-header" id="heading-three">
              <h5 class="mb-0">
              <a href=".collapse-45" class="text-dark" data-toggle="collapse">
              Question-three?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-45" data-parent="#accordion-9">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

        </div>


        <div class="col-md-6">
          <div class="card bg-light text-dark">
            <div class="card-header" id="heading-four">
              <h5 class="mb-0">
              <a href=".collapse-46" class="text-dark" data-toggle="collapse">
              Question-four?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-46" data-parent="#accordion-9">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

          <div class="card bg-light text-dark mt-2">
            <div class="card-header" id="heading-five">
              <h5 class="mb-0">
              <a href=".collapse-47" class="text-dark" data-toggle="collapse" >
              Question-five?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-47" data-parent="#accordion-9">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

          <div class="card bg-light text-dark mt-2">
            <div class="card-header" id="heading-six">
              <h5 class="mb-0">
              <a href=".collapse-48" class="text-dark" data-toggle="collapse">
              Question-six?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-48" data-parent="#accordion-9">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </section>
  <!--End of FAQ section-->


  <!--Starts Share-dealing-costs-and-charges-example section-->
  <section id="market-details" class="py-5 text-justify">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 text-center">
          <h1 class="font-weight-bold">Share dealing costs and charges example</h1>
        </div>
        <div class="col-md-8">
          <div class="invest-article">
            <table class="text-center tbl">
              <tr>
                <th>Description</th>
                <th>Costs</th>
              </tr>
              <tr>
                <td>Market spread</td>
                <td>= 0.5p</td>
              </tr>
              <tr>
                <td>IG commission</td>
                <td>= £8 to buy and sell</td>
              </tr>
              <tr>
                <td>Stamp duty</td>
                <td>= 0.5% of trade consideration when buying</td>
              </tr>
              <tr>
                <td>PTM levy</td>
                <td>= £1 when buying and selling</td>
              </tr>
            </table>


            <table class="text-center tbl mt-5">
              <tr>
                <th>Description</th>
                <th>Costs</th>
              </tr>
              <tr>
                <td>Market spread</td>
                <td>= 0.5p</td>
              </tr>
              <tr>
                <td>IG commission</td>
                <td>= £8 to buy and sell</td>
              </tr>
              <tr>
                <td>Stamp duty</td>
                <td>= 0.5% of trade consideration when buying</td>
              </tr>
              <tr>
                <td>PTM levy</td>
                <td>= £1 when buying and selling</td>
              </tr>
            </table>
            <hr class="mt-5">
            <p class="font-weight-bold">Please note that all costs, including commissions, taxes, forex rates and spreads may vary, and are used for indicative purposes only.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End of Share-dealing-costs-and-charges-example section-->

  <!--Starts FAQ Section-->
  <section id="accordion-10" class="py-4 bg-dark text-light">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h6 class="display-4 mb-3 text-success">FAQ for Share dealing costs and charges example</h6>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-md-6">
          <div class="card bg-light text-dark">
            <div class="card-header" id="heading-one">
              <h5 class="mb-0">
              <a href=".collapse-49" class="text-dark" data-toggle="collapse">
              Question-one?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-49" data-parent="#accordion-10">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

          <div class="card bg-light text-dark mt-2">
            <div class="card-header" id="heading-two">
              <h5 class="mb-0">
              <a href=".collapse-50" class="text-dark" data-toggle="collapse" >
              Question-two?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-50" data-parent="#accordion-10">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

          <div class="card bg-light text-dark mt-2">
            <div class="card-header" id="heading-three">
              <h5 class="mb-0">
              <a href=".collapse-51" class="text-dark" data-toggle="collapse">
              Question-three?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-51" data-parent="#accordion-10">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

        </div>


        <div class="col-md-6">
          <div class="card bg-light text-dark">
            <div class="card-header" id="heading-four">
              <h5 class="mb-0">
              <a href=".collapse-52" class="text-dark" data-toggle="collapse">
              Question-four?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-52" data-parent="#accordion-10">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

          <div class="card bg-light text-dark mt-2">
            <div class="card-header" id="heading-five">
              <h5 class="mb-0">
              <a href=".collapse-53" class="text-dark" data-toggle="collapse" >
              Question-five?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-53" data-parent="#accordion-10">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

          <div class="card bg-light text-dark mt-2">
            <div class="card-header" id="heading-six">
              <h5 class="mb-0">
              <a href=".collapse-54" class="text-dark" data-toggle="collapse">
              Question-six?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-54" data-parent="#accordion-10">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </section>
  <!--End of FAQ section-->

  <!--Starts Notes-to-tables section-->
  <section id="market-details-1" class="py-5 text-justify">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 text-center">
          <h1 class="font-weight-bold">Notes to tables</h1>
        </div>
        <div class="col-md-8">
          <div class="invest-article">
            <h6 class="font-weight-bold">To determine whether a particular charge applies, please call our helpdesk before you trade.</h6>
            <p class="font-weight-bold">Commission charges are calculated as a flat fee, a percentage of the transaction value or as cents per share for US shares. Where we offer trading on shares that are dual-listed and fully fungible for settlement on both exchanges, the commission
              charges relevant to the country where the primary listing is held will apply.</p>
            <p class="font-weight-bold">We will let you know in writing which commission rates apply at the time you open your account.</p>
            <p class="font-weight-bold">Trading hours are as follows:</p>
            <ul class="font-weight-bold">
              <li>UK shares (LSE): 08.00-16.30 (London time)</li>
              <li>US shares: 09.30-16.00 (New York time). US Shares trading under our 'US All Sessions' offering are tradable from 07:00-17:30 (New York Time)</li>
              <li>European shares: Market hours vary depending on the relevant exchange, please call our helpdesk on 0800 028 8550 for details</li>
              <li>Australian shares: 10:00-16:00 (Sydney time)</li>
              <li>Orders may operate differently depending on the third party we send your Order to, in particular in relation to pre- and post-market sessions for US shares. Some US shares may be visible outside of normal market hours but are not currently
                tradable on our platform. If you would like further details about how Orders work or on the ability to trade US shares outside of normal market hours, please contact one of our dealers</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End of Notes-to-tables section-->

  <!--Starts FAQ Section-->
  <section id="accordion-11" class="py-4 bg-dark text-light">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h6 class="display-4 mb-3 text-success">FAQ for Share dealing costs and charges example</h6>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-md-6">
          <div class="card bg-light text-dark">
            <div class="card-header" id="heading-one">
              <h5 class="mb-0">
              <a href=".collapse-55" class="text-dark" data-toggle="collapse">
              Question-one?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-55" data-parent="#accordion-11">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

          <div class="card bg-light text-dark mt-2">
            <div class="card-header" id="heading-two">
              <h5 class="mb-0">
              <a href=".collapse-56" class="text-dark" data-toggle="collapse" >
              Question-two?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-56" data-parent="#accordion-11">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

          <div class="card bg-light text-dark mt-2">
            <div class="card-header" id="heading-three">
              <h5 class="mb-0">
              <a href=".collapse-57" class="text-dark" data-toggle="collapse">
              Question-three?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-57" data-parent="#accordion-11">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

        </div>


        <div class="col-md-6">
          <div class="card bg-light text-dark">
            <div class="card-header" id="heading-four">
              <h5 class="mb-0">
              <a href=".collapse-58" class="text-dark" data-toggle="collapse">
              Question-four?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-58" data-parent="#accordion-11">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

          <div class="card bg-light text-dark mt-2">
            <div class="card-header" id="heading-five">
              <h5 class="mb-0">
              <a href=".collapse-59" class="text-dark" data-toggle="collapse" >
              Question-five?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-59" data-parent="#accordion-11">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

          <div class="card bg-light text-dark mt-2">
            <div class="card-header" id="heading-six">
              <h5 class="mb-0">
              <a href=".collapse-60" class="text-dark" data-toggle="collapse">
              Question-six?
              </a>
            </h5>
            </div>
            <div class="collapse p-2 collapse-60" data-parent="#accordion-11">
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, autem.</p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </section>
  <hr class="mt-5 ruler">
  <!--End of FAQ section-->

  <!--Starts service button section-->
  <section id="invest-bottom" class="text-center text-justify">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 ">
          <div class="home-article">
            <h1 class=" font-weight-bold">Get Your Service Now</h1>
            <a href="#" class="btn btn-primary mb-5" data-toggle="modal" data-target="#modal-4">Start Service</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End of service button section-->

  <!-- Starts Modal-4 Section -->
  <div class="modal text-center animated zoomIn " id="modal-4">
    <div class="container">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="display-4 text-light">Contact US</h3>
            <button class="close text-light" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <form action="{{ route('contactus') }}" method="POST">
                @csrf
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control">
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" name="message" id="message"></textarea>
              </div>
              <input type="submit" value="Send" class="btn btn-primary btn-block">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- End Modal-4 Section -->

@endsection

@push('script')
@endpush
