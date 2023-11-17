@extends('frontend.layout.app')
@section('content')

<section class="page-header">
    <div class="page-header__bg" style="background-image: url(assets/images/main/bg-better.webp);"></div>
    <div class="container">
        <ul class="thm-breadcrumb list-unstyled">
            <li><a href="index.php">Home</a></li>
            <li>/</li>
            <li><span>Grievance</span></li>
        </ul>
        <h2>Grievance</h2>
    </div>
</section>

<section class="grievance-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <section data-id="434e00e" data-element_type="section">
                    <div data-id="25b6c5c" data-element_type="column">
                        <div data-id="9a143a4" data-element_type="widget" data-widget_type="heading.default">
                            <p>Stock Benefits Financial Services is an SEBI registered Stockbroker (INA100007745) acts as investment service provider company in the capital market. Our ability of providing customer service and addressing a customer&rsquo;s query depends a lot on the information that we have and we address all issues on a best effort basis to provide a delightful experience to our customers.</p>
                            <p><strong>STEP 1</strong></p>
                            <p>All the clients having complaint regarding any support or issue with delivery of services, shall contact to his / her concerned person (Relation Manager). All Clients need to follow these steps to resolve his / her issues in respect of the services rendered to them. In case of not getting a proper solution, feel free to follow the next step.</p>
                            <p><strong>STEP 2</strong></p>
                            <p>Client&rsquo;s having complaint regarding any services or otherwise shall write an email at&nbsp;<strong><a href="mailto:support@stockbenifits.com">support@stockbenifits.com</a></strong>&nbsp;or call at 7400041121. To ensure timely recording and recognition of the grievance, the respective department shall revert within 48 hours with respect to the redressal of such complaint.</p>
                            <p><strong>STEP 3</strong></p>
                            <p>If the client is not satisfied with the actions taken via Step-1 and Step-2 and his/her grievance is not yet resolved than he/she can directly write to License holder cum Proprietor of the firm. One can mail on&nbsp;<a href="https://stockbenifits.com/grievance/support@stockbenifits.com"><strong>Amitguruhsachdeva@yahoo.com/admin@stockbenifits.com</strong></a>&nbsp;&amp; all the efforts will be put in to resolve the issue raised within next 72 hours. We will be more than happy to provide the highest levels of professional assistance to our respected clients.</p>
                        </div>
                    </div>
                </section>
                <section data-id="688c0c6" data-element_type="section"></section>
                `
                <div class="btn-grienance">
                    <a class="common-btn" href="{{ asset('frontend/assets/images/presentation-investor-grievance.pdf') }}" target="_blank">
                        Download PDF
                        <span></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
