<?php
/**
 * Template part for displaying page content in page-orderform.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package frontiertitle
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( !has_post_thumbnail() ): ?>
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->
	<?php endif; ?>

	<div class="entry-content">
		<?php the_content(); ?>

    <!-- app order form -->
    <form method="POST" id="frmOrder" enctype="multipart/form-data" action="/app/order_process.php">
				<input type="hidden" name="ClosingAgent" value="Frontier Title & Closing Services, LLC" />

				<div class="card">
					<div class="card-header">
						<h5>Transaction Information</h5>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<label for="TransactionType">Transaction Type</label>
								<select class="required form-control" name="TransactionType" tabindex="101">
									<option value="">- Select Transaction Type</option>
									<option value="Purchase">Purchase</option>
									<option value="Refinance">Refinance</option>
									<option value="Equity">Equity</option>
									<option value="New Construction">New Construction</option>
									<option value="Letter Report">Letter Report</option>
									<option value="Extended Letter Report">Extended Letter Report</option>
									<option value="Other">Other</option>
								</select>
							</div>
							<div class="col-md-6">
								<label for="LoanPolicyNumber">Loan/Policy Number</label>
								<input type="text" class="form-control" name="LoanPolicyNumber" tabindex="102" />
							</div>
						</div>
						<div class="row">
						  <div class="col-md-6">
								<label for="SalePrice">Sales Price</label>
								<input type="text" class="form-control money" name="SalePrice" tabindex="103" data-a-sign="$" data-a-dec="." data-a-sep="," />
							</div>
						  <div class="col-md-6">
							<label for="LoanAmount">Loan Amount</label>
								<input type="text" class="form-control money" name="LoanAmount" tabindex="104" data-a-sign="$" data-a-dec="." data-a-sep="," />
							</div>
						</div>		
						<div class="row">
							<div class="col-md-6">
								<label for="TitleNeedByDate">Title Need By Date</label>
								<input type="text" class="form-control date" name="TitleNeedByDate" tabindex="105" />
							</div>
							<div class="col-md-6">
								<label for="SettlementDate">Estimated Settlement Date</label>
								<input type="text" class="form-control date" name="SettlementDate" tabindex="106" />
							</div>
						</div>		
						<div class="row">
							<div class="col-md-6">
								<label for="LoanAmount">Your Role</label>
								<select class="form-control" name="Role" tabindex="107">
									<option value="">- Select Role</option>
									<option value="Attorney">Attorney</option>
									<option value="Builder">Builder</option>
									<option value="Buyer/Borrower">Buyer/Borrower</option>
									<option value="Lender">Lender</option>
									<option value="Listing Agent">Listing Agent</option>
									<option value="Mortgage Broker">Mortgage Broker</option>
									<option value="Other Contact">Other Contact</option>
									<option value="Seller">Seller</option>
									<option value="Selling Agent">Selling Agent</option>
									<option value="Surveyor">Surveyor</option>
									<option value="Title Company">Title Company</option>
								</select>				    
							</div>
							<div class="col-md-6">
								<label for="SalesRepresentative">Sales Representative</label>
								<input type="text" class="form-control capitalize" name="SalesRepresentative" tabindex="108" />
							</div>
						</div>		
					</div>
				</div>

				<div class="card">
					<div class="card-header">
						<h5>Property Information</h5>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<label for="PropertyType">Property Type</label>
								<select class="required form-control" name="PropertyType" tabindex="109">
									<option value="">- Select Property Type</option>
									<option value="Single Family">Single Family</option>
									<option value="1-4 Family">1-4 Family</option>
									<option value="PUD">PUD</option>
									<option value="Condo">Condo</option>
									<option value="Cooperative">Cooperative</option>
									<option value="Unimproved">Unimproved</option>
									<option value="Vacant Land">Vacant Land</option>
									<option value="Other">Other</option>
								</select>
							</div>
							<div class="col-md-6">
								<label for="PropertyType">Property Type</label>
								<div><input type="checkbox" name="PropertyTypeCommercial" value="Commercial" tabindex="110" />Commercial</div>
								<div><input type="checkbox" name="PropertyTypeNew" value="New Construction" tabindex="111" />New Construction</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<label for="PropertyAddress1">Address</label>
								<input type="text" class="form-control capitalize" name="PropertyAddress1" tabindex="112" />
							</div>
							<div class="col-md-6">
								<label for="PropertyState">State</label>
								<select name="PropertyState" class="state form-control" tabindex="115">
									<?php include('states.php'); ?>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<label for="PropertyAddress2">Address Line 2</label>
								<input type="text" class="form-control capitalize" name="PropertyAddress2" tabindex="113" />
							</div>
							<div class="col-md-6">
								<label for="PropertyZip">Zip</label>
								<input type="text" name="PropertyZip" tabindex="116" class="form-control" />
							</div>
						</div>		
						<div class="row">
							<div class="col-md-6">
								<label for="PropertyCity">City</label>	
								<input type="text" class="form-control capitalize" name="PropertyCity" tabindex="114" />
							</div>
							<div class="col-md-6">
								<label for="PropertyCounty">County</label>
								<input type="text" class="form-control capitalize" name="PropertyCounty" tabindex="117" />
							</div>
						</div>
						<h6>Legal</h6>							
						<div class="row">
							<div class="col-md-6">
								<label for="TaxMapID">TaxMapID</label>
								<input type="text" class="form-control capitalize" name="TaxMapID" tabindex="120" />
							</div>
						</div>	
						<div class="row">
							<div class="col-md-12">
								<label for="LegalDescription">Legal Description</label>
								<textarea name="LegalDescription" rows="10" cols="80" tabindex="121" class="form-control"></textarea>
							</div>
						</div>	
					</div>
				</div>
				
				<div class="card">
					<div class="card-header">
						<h5>Buyer/Borrower(s)</h5>
					</div>
					<div class="card-body">
						<div class="buyer">
							<div class="row">
								<div class="col-md-6">
									<input type="radio" name="buyertype" value="person" checked="checked"  tabindex="124" /> Person
									<input type="radio" name="buyertype" value="company" tabindex="125" /> Company
								</div>
							</div>
							<h6>Name</h6>
							<div class="row buyername">					
								<div class="col-md-3">
									<label for="BuyerName1First">First</label>
									<input type="text" class="form-control capitalize" name="BuyerName1First[]"  tabindex="126" />
								</div>
								<div class="col-md-3">
									<label for="BuyerName1Middle">Middle</label>
									<input type="text" class="form-control capitalize" name="BuyerName1Middle[]" tabindex="127" />
								</div>
								<div class="col-md-3">
									<label for="BuyerName1Last">Last</label>
									<input type="text" class="form-control capitalize" name="BuyerName1Last[]" tabindex="128" />
								</div>
								<div class="col-md-3">
									<label for="BuyerName1Suffix">Suffix</label>
									<input type="text" class="form-control capitalize" name="BuyerName1Suffix[]" tabindex="129" />
								</div>
							</div>	
							<div class="row buyername">
								<div class="col-md-3">
									<input type="text" class="form-control capitalize" name="BuyerName2First[]" tabindex="130" />
								</div>
								<div class="col-md-3">
									<input type="text" class="form-control capitalize" name="BuyerName2Middle[]" tabindex="131" />
								</div>
								<div class="col-md-3">
									<input type="text" class="form-control capitalize" name="BuyerName2Last[]" tabindex="132" />
								</div>
								<div class="col-md-3">
									<input type="text" class="form-control capitalize" name="BuyerName2Suffix[]" tabindex="133" />
								</div>
							</div>
							<div class="row buyercompany">
								<div class="col-md-12">
									<label for="BuyerCompany">Company Name</label>
									<input type="text" class="form-control capitalize" name="BuyerCompany[]" tabindex="134" />
								</div>
							</div>	
							<div class="row">					
								<div class="col-md-6">
									<label for="BuyerAddress1">Address</label>
									<input type="text" class="form-control capitalize" name="BuyerAddress1[]" tabindex="135" /></div>
								<div class="col-md-6">
									<label for="BuyerState">State</label>
									<select name="BuyerState[]" class="state form-control" tabindex="138">
										<?php include('states.php'); ?>
									</select>		
								</div>
							</div>				
							<div class="row">
								<div class="col-md-6">
									<label for="BuyerAddress2">Address Line 2</label>
									<input type="text" class="form-control capitalize" name="BuyerAddress2[]" tabindex="136" />
								</div>
								<div class="col-md-6">
									<label for="BuyerZip">Zip</label>
									<input type="text" name="BuyerZip[]" tabindex="139" class="form-control" />
								</div>
							</div>					
							<div class="row">					
								<div class="col-md-6">
									<label for="BuyerCity">City</label>	
									<input type="text" class="form-control capitalize" class="buyercity" name="BuyerCity[]" tabindex="137" />
								</div>
							</div>	
							<div class="row">
								<div class="col-md-6">
									<label for="BuyerPhone">Phone</label>
									<input type="text" class="form-control phone" name="BuyerPhone[]" tabindex="140" />
								</div>
								<div class="col-md-6">
									<label for="BuyerPhoneMobile">Mobile</label>
									<input type="text" class="form-control phone" name="BuyerPhoneMobile[]" tabindex="141" />
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<label for="BuyerEmail">Email</label>	
									<input type="text" name="BuyerEmail[]" tabindex="142" class="form-control" />
								</div>
								<div class="col-md-6">
									<label for="BuyerFax">Fax</label>
									<input type="text" class="form-control phone" name="BuyerFax[]" tabindex="143" />
								</div>
							</div>		
								
							<input type="hidden" name="BuyerRelationship[]" value="and" class="btn btn-primary" />
						</div>
						
						<div class="additionalbuyers"></div>
						
						<button id="btnAddBuyer" class="btn btn-secondary">Add Buyer</button>
					</div>
				</div>
					
				


				<div class="card">
					<div class="card-header">
						<h5>Seller(s)</h5>
					</div>
					<div class="card-body">
						<div class="seller">						
							<div class="row">
								<div class="col-md-6">
									<input type="radio" name="sellertype" value="person" checked="checked" tabindex="144" /> Person
									<input type="radio" name="sellertype" value="company" tabindex="145" /> Company						
								</div>
							</div>
							<h5>Name</h5>
							<div class="row sellername">
								<div class="col-md-3">
									<label for="SellerName1First">First</label>
									<input type="text" class="form-control capitalize" name="SellerName1First[]" tabindex="146" />
								</div>
								<div class="col-md-3">
									<label for="SellerName1Middle">Middle</label>
									<input type="text" class="form-control capitalize" name="SellerName1Middle[]" tabindex="147" />
								</div>
								<div class="col-md-3">
									<label for="SellerName1Last">Last</label>
									<input type="text" class="form-control capitalize" name="SellerName1Last[]" tabindex="148" />
								</div>
								<div class="col-md-3">
									<label for="SellerName1Suffix">Suffix</label>
									<input type="text" class="form-control capitalize" name="SellerName1Suffix[]" tabindex="149" />
								</div>
							</div>				
							<div class="row sellername">
								<div class="col-md-3">
									<input type="text" class="form-control capitalize" name="SellerName2First[]" tabindex="150" />
								</div>
								<div class="col-md-3">
									<input type="text" class="form-control capitalize" name="SellerName2Middle[]" tabindex="151" />
								</div>
								<div class="col-md-3">
									<input type="text" class="form-control capitalize" name="SellerName2Last[]" tabindex="152" />
								</div>
								<div class="col-md-3">
									<input type="text" class="form-control capitalize" name="SellerName2Suffix[]" tabindex="153" />
								</div>
							</div>	
							<div class="row sellercompany">
								<div class="col-md-12">
									<label for="SellerComany">Company Name</label>
									<input type="text" class="form-control capitalize" name="SellerCompany[]" tabindex="154" />
								</div>
							</div>						
							<div class="row">
								<div class="col-md-6">
									<label>Address</label>	
									<input type="text" class="form-control capitalize" name="SellerAddress1[]" tabindex="155" />
								</div>
								<div class="col-md-6">
									<label for="SellerState">State</label>
									<select name="SellerState[]" class="state form-control" tabindex="158">
										<?php include('states.php'); ?>
									</select>
								</div>
							</div>				
							<div class="row">
								<div class="col-md-6">
									<label for="SellerAddress2">Address Line 2</label>
									<input type="text" class="form-control capitalize" name="SellerAddress2[]" tabindex="156" />
								</div>
								<div class="col-md-6">
									<label for="SellerZip">Zip</label>
									<input type="text" name="SellerZip[]" tabindex="159" class="form-control" />
								</div>
							</div>					
							<div class="row">					
								<div class="col-md-6">
									<label for="SellerCity">City</label>	
									<input type="text" class="form-control capitalize" class="Sellercity" name="SellerCity[]" tabindex="157" />
								</div>
							</div>	
							<div class="row">
								<div class="col-md-6">
									<label for="SellerPhone">Phone</label>
									<input type="text" class="form-control phone" name="SellerPhone[]" tabindex="160" />
								</div>
								<div class="col-md-6">
									<label for="SellerPhoneMobile">Mobile</label>
									<input type="text" class="form-control phone" name="SellerPhoneMobile[]" tabindex="161" />
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<label for="SellerEmail">Email</label>
									<input type="text" name="SellerEmail[]" tabindex="162" class="form-control" />
								</div>
								<div class="col-md-6">
									<label for="SellerFax">Fax</label>
									<input type="text" class="phone form-control" name="SellerFax[]" tabindex="163" class="form-control" />
								</div>
							</div>		
							
							<input type="hidden" name="SellerRelationship[]" value="and" />	
						</div>
					
						<div class="additionalsellers"></div>

						<button id="btnAddSeller" class="btn btn-secondary">Add Seller</button>
					</div>
				</div>


				<div class="card">
					<div class="card-header">
						<h6>Listing Agent</h6>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-12">
								<label for="ListingAgent">Company Name</label>
								<input type="text" class="form-control capitalize" name="ListingAgent" tabindex="164" />
							</div>
						</div>						
						<div class="row">
							<div class="col-md-6">
								<label for="ListingAgentFirstName">First Name</label>
								<input type="text" class="form-control capitalize" name="ListingAgentFirstName" tabindex="165" />
							</div>
							<div class="col-md-6">
								<label for="ListingAgentLastName">Last Name</label>
								<input type="text" class="form-control capitalize" name="ListingAgentLastName" tabindex="166" />
							</div>
						</div>					
						<div class="row">
							<div class="col-md-6">
								<label for="ListingAgentAddress1">Address</label>
								<input type="text" class="form-control capitalize" name="ListingAgentAddress1" tabindex="167" />
							</div>
							<div class="col-md-6">
								<label for="ListingAgentState">State</label>
								<select name="ListingAgentState" class="state form-control" tabindex="170">
									<?php include('states.php'); ?>
								</select>
							</div>
						</div>									
						<div class="row">
							<div class="col-md-6">
								<input type="text" class="form-control capitalize" name="ListingAgentAddress2" tabindex="168" />
							</div>
							<div class="col-md-6">
								<label for="ListingAgentZip">Zip</label>
								<input type="text" name="ListingAgentZip" tabindex="171" class="form-control" />
							</div>
						</div>					
						<div class="row">					
							<div class="col-md-6">
								<label for="ListingAgentCity">City</label>
								<input type="text" class="form-control capitalize" name="ListingAgentCity" tabindex="169" />
							</div>
						</div>	
						<div class="row">
							<div class="col-md-6">
								<label for="ListingAgentPhone">Phone</label>
								<input type="text" class="form-control phone" name="ListingAgentPhone" tabindex="172" />
							</div>
							<div class="col-md-6">
								<label for="ListingAgentPhoneMobile">Mobile</label>
								<input type="text" class="form-control phone" name="ListingAgentPhoneMobile" tabindex="173" />
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<label for="ListingAgentEmail">Email</label>
								<input type="text" name="ListingAgentEmail" tabindex="174" class="form-control" />
							</div>
							<div class="col-md-6">
								<label for="ListingAgentFax">Fax</label>
								<input type="text" class="form-control phone" name="ListingAgentFax" tabindex="175" />
							</div>
						</div>
					</div>
				</div>


				<div class="card">
					<div class="card-header">
						<h5>Selling Agent</h5>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-12">
								<label for="SellingAgent">Company Name</label>
								<input type="text" class="form-control capitalize" name="SellingAgent" tabindex="176" />
							</div>
						</div>					
						<div class="row">
							<div class="col-md-6">
								<label for="SellingAgentFirstName">First Name</label>
								<input type="text" class="form-control capitalize" name="SellingAgentFirstName" tabindex="177" />
							</div>
							<div class="col-md-6">
								<label for="SellingAgentLastName">Last Name</label>
								<input type="text" class="form-control capitalize" name="SellingAgentLastName" tabindex="178" />
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-6">
								<label for="SellingAgentAddress1">Address</label>
								<input type="text" class="form-control capitalize" name="SellingAgentAddress1" tabindex="179" />
							</div>
							<div class="col-md-6">
								<label for="SellingAgentState">State</label>
								<select name="SellingAgentState" class="state form-control" tabindex="182">
									<?php include('states.php'); ?>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<label for="SellingAgentAddress2">Address Line 2</label>
								<input type="text" class="form-control capitalize" name="SellingAgentAddress2" tabindex="180" />
							</div>
							<div class="col-md-6">
								<label for="SellingAgentZip">Zip</label>
								<input type="text" name="SellingAgentZip" tabindex="183" class="form-control" />
							</div>
						</div>					
						<div class="row">
							<div class="col-md-6">
								<label for="SellingAgentCity">City</label>
								<input type="text" class="form-control capitalize" name="SellingAgentCity" tabindex="181" />
							</div>
						</div>	
						<div class="row">
							<div class="col-md-6">
								<label for="SellingAgentPhone">Phone</label>
								<input type="text" class="form-control phone" name="SellingAgentPhone" tabindex="184" />
							</div>
							<div class="col-md-6">
								<label for="SellingAgentPhoneMobile">Mobile</label>
								<input type="text" class="form-control phone" name="SellingAgentPhoneMobile" tabindex="185" />
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<label for="SellingAgentEmail">Email</label>
								<input type="text" name="SellingAgentEmail" tabindex="186" class="form-control" />
							</div>
							<div class="col-md-6">
								<label for="SellingAgentFax">Fax</label>
								<input type="text" class="form-control phone" name="SellingAgentFax" tabindex="187" />
							</div>
						</div>
					</div>
				</div>
				
				<div class="card">
					<div class="card-header">
						<h5>Lender</h5>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-12">
								<label for="LenderName">Company Name</label>
								<input type="text" class="form-control capitalize" name="LenderName" tabindex="188" />
							</div>
						</div>						
						<div class="row">
							<div class="col-md-6">
								<label for="LenderFirstName">First Name</label>
								<input type="text" class="form-control capitalize" name="LenderFirstName" tabindex="190" />
							</div>
							<div class="col-md-6">
								<label for="LenderLastName">Last Name</label>
								<input type="text" class="form-control capitalize" name="LenderLastName" tabindex="191" />
							</div>
						</div>
						<div class="row">					
							<div class="col-md-6">
								<label for="LenderAddress1">Address</label>
								<input type="text" class="form-control capitalize" name="LenderAddress1" tabindex="192" />
							</div>
							<div class="col-md-6">
								<label for="LenderState">State</label>
								<select name="LenderState" class="state form-control" tabindex="195">
									<?php include('states.php'); ?>
								</select>
							</div>
						</div>								
						<div class="row">
							<div class="col-md-6">
								<label for="LenderAddress6">Address Line 2</label>
								<input type="text" class="form-control capitalize" name="LenderAddress2" tabindex="193" />
							</div>
							<div class="col-md-6">
								<label for="LenderZip">Zip</label>
								<input type="text" name="LenderZip" class="form-control" tabindex="196" />
							</div>
						</div>					
						<div class="row">
							<div class="col-md-6">
								<label for="LenderCity">City</label>
								<input type="text" class="form-control capitalize" name="LenderCity" tabindex="194" />
							</div>
						</div>	
						<div class="row">
							<div class="col-md-6">
								<label for="LenderPhone">Phone</label>
								<input type="text" class="form-control phone" name="LenderPhone" tabindex="197" />
							</div>
							<div class="col-md-6">
								<label for="LenderPhoneMobile">Mobile</label>
								<input type="text" class="form-control phone" name="LenderPhoneMobile" tabindex="198" />
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<label for="LenderEmail">Email</label>
								<input type="text" name="LenderEmail" tabindex="199" class="form-control" />
							</div>
							<div class="col-md-6">
								<label for="LenderFax">Fax</label>
								<input type="text" class="phone" name="LenderFax" tabindex="200" class="form-control" />
							</div>
						</div>	
					</div>
				</div>
				
				<div class="card">
					<div class="card-header">
						<h5>Builder</h5>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-12">
								<label for="BuilderName">Company Name</label>
								<input type="text" class="form-control capitalize" name="BuilderName" tabindex="201" />
							</div>
						</div>					
						<div class="row">
							<div class="col-md-6">
								<label for="BuilderFirstName">First Name</label>
								<input type="text" class="form-control capitalize" name="BuilderFirstName" tabindex="202" />
							</div>
							<div class="col-md-6">
								<label for="BuilderLastName">Last Name</label>
								<input type="text" class="form-control capitalize" name="BuilderLastName" tabindex="203" />
							</div>
						</div>				
						<div class="row">					
							<div class="col-md-6">
								<label for="BuilderAddress1">Address</label>
								<input type="text" class="form-control capitalize" name="BuilderAddress1" tabindex="204" />
							</div>
							<div class="col-md-6">
								<label for="BuilderState">State</label>
								<select name="BuilderState" class="state form-control" tabindex="207">
									<?php include('states.php'); ?>
								</select>	
							</div>
						</div>								
						<div class="row">					
							<div class="col-md-6">
								<label for="BuilderAddress2">Address Line 2</label>
								<input type="text" class="form-control capitalize" name="BuilderAddress2" tabindex="205" />
							</div>
							<div class="col-md-6">
								<label for="BuilderZip">Zip</label>
								<input type="text" name="BuilderZip" tabindex="208" class="form-control" />
							</div>
						</div>					
						<div class="row">
							<div class="col-md-6">
								<label for="BuilderCity">City</label>
								<input type="text" class="form-control capitalize" name="BuilderCity" tabindex="206" />
							</div>
						</div>	
						<div class="row">
							<div class="col-md-6">
								<label for="BuilderPhone">Phone</label>
								<input type="text" class="form-control phone" name="BuilderPhone" tabindex="209" />
							</div>
							<div class="col-md-6">
								<label for="BuilderPhoneMobile">Mobile</label>
								<input type="text" class="form-control phone" name="BuilderPhoneMobile" tabindex="210" />
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<label for="BuilderEmail">Email</label>
								<input type="text" name="BuilderEmail" tabindex="211" class="form-control" />
							</div>
							<div class="col-md-6">
								<label for="BuilderFax">Fax</label>
								<input type="text" class="form-control phone" name="BuilderFax" tabindex="212" />
							</div>
						</div>	
					</div>
				</div>

				<div class="card">
					<div class="card-header">
						<h5>Documents</h5>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-12">
								<label for="woefile">Documents</label>
								<input type="file" name="woeFile[]" id="woeFile" multiple />
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="Notes">Notes</label>
								<textarea name="Notes" rows="5" cols="50" tabindex="215" class="form-control"></textarea>
							</div>
						</div>
					</div>
				</div>
				
				<div class="card">
					<div class="card-header">
						<h5>Confirmation</h5>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-12">
								<label for="woefile">Email</label>
								<p>Please enter your email address for order confirmation</p>
								<input class="form-control required" type="text" name="email" id="email" size="40" />
							</div>
						</div>
					</div>
				</div>
					
				<input type="submit" value="Submit Order" class="btn btn-primary" />	
			</form>

  	<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'frontiertitle' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="sr-only">%s</span>', 'frontiertitle' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
