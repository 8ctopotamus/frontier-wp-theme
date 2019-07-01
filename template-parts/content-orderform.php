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

				<table class="orderFormTable">
					<tr><td class="orderFormSectionHeader">Transaction Information</td></tr>
					<tr>
						<td class="orderFormSection">
							<div class="row row-pad">
						    <div class="col-md-2 labelright"><label for="TransactionType">Transaction Type</label></div>
						    <div class="col-md-2">
							    <select class="required" name="TransactionType" tabindex="101">
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
						    <div class="col-md-2">&nbsp;</div>
						    <div class="col-md-2 labelright"><label for="LoanPolicyNumber">Loan/Policy Number</label></div>
						    <div class="col-md-2"><input type="text" class="form-control" name="LoanPolicyNumber" tabindex="102" /></div>
						    <div class="col-md-2">&nbsp;</div>
						</div>
						<div class="row row-pad">
	 					    <div class="col-md-2 labelright"><label for="SalePrice">Sales Price</label></div>
						    <div class="col-md-2"><input type="text" class="form-control money" name="SalePrice" tabindex="103" data-a-sign="$" data-a-dec="." data-a-sep="," /></div>
						    <div class="col-md-2">&nbsp;</div>
						    <div class="col-md-2 labelright"><label for="LoanAmount">Loan Amount</label></div>
						    <div class="col-md-2"><input type="text" class="form-control money" name="LoanAmount" tabindex="104" data-a-sign="$" data-a-dec="." data-a-sep="," /></div>
						    <div class="col-md-2">&nbsp;</div>
						</div>		
						<div class="row row-pad">
						    <div class="col-md-2 labelright"><label for="TitleNeedByDate">Title Need By Date</label></div>
						    <div class="col-md-2"><input type="text" class="form-control date" name="TitleNeedByDate" tabindex="105" /></div>
						    <div class="col-md-2">&nbsp;</div>
						    <div class="col-md-2 labelright"><label for="SettlementDate">Estimated Settlement Date</label></div>
						    <div class="col-md-2"><input type="text" class="form-controldate" name="SettlementDate" tabindex="106" /></div>
						    <div class="col-md-2">&nbsp;</div>
						</div>		
						<div class="row row-pad">
						    <div class="col-md-2 labelright"><label for="LoanAmount">Your Role</label></div>
						    <div class="col-md-2">
							    <select name="Role" tabindex="107">
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
						    <div class="col-md-2">&nbsp;</div>
						    <div class="col-md-2 labelright"><label for="SalesRepresentative">Sales Representative</label></div>
						    <div class="col-md-2"><input type="text" class="form-control capitalize" name="SalesRepresentative" tabindex="108" /></div>
						    <div class="col-md-2">&nbsp;</div>
						</div>		
						</td>
					</tr>
				</table>				
				
	
				
				<table class="orderFormTable">
					<tr><td class="orderFormSectionHeader">Property Information</td></tr>
					<tr>
					<td class="orderFormSection">
						<div class="row row-pad">
						    <div class="col-md-2 labelright"><label for="PropertyType">Property Type</label></div>
						    <div class="col-md-2">
							    <select class="required" name="PropertyType" tabindex="109">
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
						    <div class="col-md-2">&nbsp;</div>
						    <div class="col-md-2"><input type="checkbox" name="PropertyTypeCommercial" value="Commercial" tabindex="110" />Commercial</div>		
						    <div class="col-2-6"><input type="checkbox" name="PropertyTypeNew" value="New Construction" tabindex="111" />New Construction</div>		
						</div>
						
						<div class="subheader">Address</div>		
						<div class="row row-pad">
						    <div class="col-md-2 labelright"><label for="PropertyAddress1">Address</label></div>
						    <div class="col-md-2"><input type="text" class="form-control capitalize" name="PropertyAddress1" tabindex="112" /></div>
						    <div class="col-md-2">&nbsp;</div>
						    <div class="col-md-2 labelright"><label for="PropertyState">State</label></div>
						    <div class="col-md-2">
								<select name="PropertyState" class="state" tabindex="115">
									<?php include('states.php'); ?>
								</select>
							</div>
						    <div class="col-md-2">&nbsp;</div>
						</div>
						<div class="row row-pad">
						    <div class="col-md-2">&nbsp;</div>
						    <div class="col-md-2"><input type="text" class="form-control capitalize" name="PropertyAddress2" tabindex="113" /></div>
						    <div class="col-md-2">&nbsp;</div>
						    <div class="col-md-2 labelright"><label for="PropertyZip">Zip</label></div>
						    <div class="col-md-2"><input type="text" name="PropertyZip" tabindex="116" class="form-control" /></div>
						    <div class="col-md-2">&nbsp;</div>
						</div>		
						<div class="row row-pad">
						    <div class="col-md-2 labelright"><label for="PropertyCity">City</label></div>
						    <div class="col-md-2"><input type="text" class="form-control capitalize" name="PropertyCity" tabindex="114" /></div>
						    <div class="col-md-2">&nbsp;</div>
						    <div class="col-md-2 labelright"><label for="PropertyCounty">County</label></div>
						    <div class="col-md-2"><input type="text" class="form-control capitalize" name="PropertyCounty" tabindex="117" /></div>
						    <div class="col-md-2">&nbsp;</div>
						</div>			
						
						<div class="subheader">Legal</div>							
						<div class="row row-pad">
						    <div class="col-md-2 labelright"><label for="TaxMapID">TaxMapID</label></div>
						    <div class="col-md-2"><input type="text" class="form-control capitalize" name="TaxMapID" tabindex="120" /></div>
						    <div class="col-md-2">&nbsp;</div>
						</div>	
						<div class="row row-pad">
						    <div class="col-md-2 labelright"><label for="LegalDescription">Legal Description</label></div>
						    <div class="col-5-6"><textarea name="LegalDescription" rows="10" cols="80" tabindex="121" class="form-control"></textarea></div>
						</div>	
														
					</td>
				</tr>
				</table>
					
				<table class="orderFormTable">
					<tr><td class="orderFormSectionHeader">Buyer/Borrower(s)</td></tr>
					<tr>
					<td class="orderFormSection">						
						<div class="buyer">
							<div class="row row-pad">
								<div class="col-md-2">&nbsp;</div>
								<div class="col-4-6">
									<input type="radio" name="buyertype" value="person" checked="checked"  tabindex="124" /> Person
									<input type="radio" name="buyertype" value="company" tabindex="125" /> Company
								</div>
							</div>														
							<div class="row row-pad buyername">
								<div class="col-md-2">&nbsp;</div>
								<div class="col-md-2">First</div>
								<div class="col-md-2">Middle</div>
								<div class="col-md-2">Last</div>
								<div class="col-md-2">Suffix</div>
							</div>
							<div class="row row-pad buyername">					
							    <div class="col-md-2 labelright">Name</div>
							    <div class="col-md-2"><input type="text" class="form-control capitalize" name="BuyerName1First[]"  tabindex="126" /></div>
							    <div class="col-md-2"><input type="text" class="form-control capitalize" name="BuyerName1Middle[]" tabindex="127" /></div>
							    <div class="col-md-2"><input type="text" class="form-control capitalize" name="BuyerName1Last[]" tabindex="128" /></div>
							    <div class="col-md-2"><input type="text" class="form-control capitalize" name="BuyerName1Suffix[]" tabindex="129" /></div>
							</div>	
							<div class="row row-pad buyername">					
							    <div class="col-md-2">&nbsp</div>
							    <div class="col-md-2"><input type="text" class="form-control capitalize" name="BuyerName2First[]" tabindex="130" /></div>
							    <div class="col-md-2"><input type="text" class="form-control capitalize" name="BuyerName2Middle[]" tabindex="131" /></div>
							    <div class="col-md-2"><input type="text" class="form-control capitalize" name="BuyerName2Last[]" tabindex="132" /></div>
							    <div class="col-md-2"><input type="text" class="form-control capitalize" name="BuyerName2Suffix[]" tabindex="133" /></div>
							</div>								
							<div class="row row-pad buyercompany">					
							    <div class="col-md-2">Company Name</div>
							    <div class="col-2-6"><input type="text" class="form-control capitalize" name="BuyerCompany[]" tabindex="134" /></div>
							</div>	
							<div class="row row-pad">					
								<div class="col-md-2 labelright"><label>Address</label></div>
								<div class="col-md-2"><input type="text" class="form-control capitalize" name="BuyerAddress1[]" tabindex="135" /></div>
								<div class="col-md-2">&nbsp;</div>
								<div class="col-md-2 labelright"><label for="BuyerState">State</label></div>
								<div class="col-md-2">
									<select name="BuyerState[]" class="state" tabindex="138">
										<?php include('states.php'); ?>
									</select>		
								</div>
							</div>				
							<div class="row row-pad">					
								<div class="col-md-2">&nbsp;</div>
								<div class="col-md-2"><input type="text" class="form-control capitalize" name="BuyerAddress2[]" tabindex="136" /></div>
								<div class="col-md-2">&nbsp;</div>
								<div class="col-md-2 labelright"><label for="BuyerZip">Zip</label></div>
								<div class="col-md-2"><input type="text" name="BuyerZip[]" tabindex="139" class="form-control" /></div>
							</div>					
							<div class="row row-pad">					
								<div class="col-md-2 labelright"><label for="BuyerCity">City</label></div>
								<div class="col-md-2"><input type="text" class="form-control capitalize" class="buyercity" name="BuyerCity[]" tabindex="137" /></div>
							</div>	
							<div class="row row-pad">
								<div class="col-md-2 labelright"><label for="BuyerPhone">Phone</label></div>
								<div class="col-md-2"><input type="text" class="form-control phone" name="BuyerPhone[]" tabindex="140" /></div>
								<div class="col-md-2">&nbsp;</div>
								<div class="col-md-2 labelright"><label for="BuyerPhoneMobile">Mobile</label></div>
								<div class="col-md-2"><input type="text" class="form-control phone" name="BuyerPhoneMobile[]" tabindex="141" /></div>
								<div class="col-md-2">&nbsp;</div>
							</div>
							<div class="row row-pad">
								<div class="col-md-2 labelright"><label for="BuyerEmail">Email</label></div>
								<div class="col-md-2"><input type="text" name="BuyerEmail[]" tabindex="142" class="form-control" /></div>
								<div class="col-md-2">&nbsp;</div>
								<div class="col-md-2 labelright"><label for="BuyerFax">Fax</label></div>
								<div class="col-md-2"><input type="text" class="form-control phone" name="BuyerFax[]" tabindex="143" /></div>
								<div class="col-md-2">&nbsp;</div>
							</div>		
							
							<input type="hidden" name="BuyerRelationship[]" value="and" class="btn btn-primary" />	
						
						</div>
						
						<div class="additionalbuyers"></div>
						
						<div class="row row-pad">					
						    <div class="col-md-2">&nbsp</div>
						    <div class="col-md-2"><button id="btnAddBuyer">Add Buyer</button></div>
						</div>
						
					</td>
					</tr>
				</table>
				
				
				<table class="orderFormTable">
					<tr><td class="orderFormSectionHeader">Seller(s)</td></tr>
					<tr>
					<td class="orderFormSection">	
						<div class="seller">						
							<div class="row row-pad">
								<div class="col-md-2">&nbsp;</div>
								<div class="col-4-6">
									<input type="radio" name="sellertype" value="person" checked="checked" tabindex="144" /> Person
									<input type="radio" name="sellertype" value="company" tabindex="145" /> Company						
								</div>
							</div>									
							<div class="row row-pad sellername">
								<div class="col-md-2">&nbsp;</div>
								<div class="col-md-2">First</div>
								<div class="col-md-2">Middle</div>
								<div class="col-md-2">Last</div>
								<div class="col-md-2">Suffix</div>
								<div class="col-md-2">&nbsp;</div>
							</div>						
							<div class="row row-pad sellername">					
							    <div class="col-md-2 labelright">Name</div>
							    <div class="col-md-2"><input type="text" class="form-control capitalize" name="SellerName1First[]" tabindex="146" /></div>
							    <div class="col-md-2"><input type="text" class="form-control capitalize" name="SellerName1Middle[]" tabindex="147" /></div>
							    <div class="col-md-2"><input type="text" class="form-control capitalize" name="SellerName1Last[]" tabindex="148" /></div>
							    <div class="col-md-2"><input type="text" class="form-control capitalize" name="SellerName1Suffix[]" tabindex="149" /></div>
							    <div class="col-md-2">&nbsp;</div>
							</div>				
							<div class="row row-pad sellername">					
							    <div class="col-md-2">&nbsp;</div>
							    <div class="col-md-2"><input type="text" class="form-control capitalize" name="SellerName2First[]" tabindex="150" /></div>
							    <div class="col-md-2"><input type="text" class="form-control capitalize" name="SellerName2Middle[]" tabindex="151" /></div>
							    <div class="col-md-2"><input type="text" class="form-control capitalize" name="SellerName2Last[]" tabindex="152" /></div>
							    <div class="col-md-2"><input type="text" class="form-control capitalize" name="SellerName2Suffix[]" tabindex="153" /></div>
							    <div class="col-md-2">&nbsp;</div>
							</div>	
							<div class="row row-pad sellercompany">					
							    <div class="col-md-2">Company Name</div>
							    <div class="col-2-6"><input type="text" class="form-control capitalize" name="SellerCompany[]" tabindex="154" /></div>
							</div>						
							<div class="row row-pad">					
								<div class="col-md-2 labelright"><label>Address</label></div>
								<div class="col-md-2"><input type="text" class="form-control capitalize" name="SellerAddress1[]" tabindex="155" /></div>
								<div class="col-md-2">&nbsp;</div>
								<div class="col-md-2 labelright"><label for="SellerState">State</label></div>
								<div class="col-md-2">
									<select name="SellerState[]" class="state" tabindex="158">
										<?php include('states.php'); ?>
									</select>
								</div>
							</div>				
							<div class="row row-pad">					
								<div class="col-md-2">&nbsp;</div>
								<div class="col-md-2"><input type="text" class="form-control capitalize" name="SellerAddress2[]" tabindex="156" /></div>
								<div class="col-md-2">&nbsp;</div>
								<div class="col-md-2 labelright"><label for="SellerZip">Zip</label></div>
								<div class="col-md-2"><input type="text" name="SellerZip[]" tabindex="159" class="form-control" /></div>
							</div>					
							<div class="row row-pad">					
								<div class="col-md-2 labelright"><label for="SellerCity">City</label></div>
								<div class="col-md-2"><input type="text" class="form-control capitalize" class="Sellercity" name="SellerCity[]" tabindex="157" /></div>
							</div>	
							<div class="row row-pad">
								<div class="col-md-2 labelright"><label for="SellerPhone">Phone</label></div>
								<div class="col-md-2"><input type="text" class="form-control phone" name="SellerPhone[]" tabindex="160" /></div>
								<div class="col-md-2">&nbsp;</div>
								<div class="col-md-2 labelright"><label for="SellerPhoneMobile">Mobile</label></div>
								<div class="col-md-2"><input type="text" class="form-controlphone" name="SellerPhoneMobile[]" tabindex="161" /></div>
								<div class="col-md-2">&nbsp;</div>
							</div>
							<div class="row row-pad">
								<div class="col-md-2 labelright"><label for="SellerEmail">Email</label></div>
								<div class="col-md-2"><input type="text" name="SellerEmail[]" tabindex="162" class="form-control" /></div>
								<div class="col-md-2">&nbsp;</div>
								<div class="col-md-2 labelright"><label for="SellerFax">Fax</label></div>
								<div class="col-md-2"><input type="text" class="phone" name="SellerFax[]" tabindex="163" class="form-control" /></div>
								<div class="col-md-2">&nbsp;</div>
							</div>		
							
							<input type="hidden" name="SellerRelationship[]" value="and" />	
						
						</div>
					
						<div class="additionalsellers"></div>
						
						<div class="row row-pad">					
						    <div class="col-md-2">&nbsp</div>
						    <div class="col-md-2"><button id="btnAddSeller">Add Seller</button></div>
						</div>
						
					</td>
					</tr>
				</table>
				
				<table class="orderFormTable">
					<tr><td class="orderFormSectionHeader">Listing Agent</td></tr>
					<tr>
					<td class="orderFormSection">														
						<div class="row row-pad">
							<div class="col-md-2 labelright"><label for="ListingAgent">Company Name</label></div>
							<div class="col-md-2"><input type="text" class="form-control capitalize" name="ListingAgent" tabindex="164" /></div>
						</div>						
						<div class="row row-pad">
							<div class="col-md-2 labelright"><label for="ListingAgentFirstName">First Name</label></div>
							<div class="col-md-2"><input type="text" class="form-control capitalize" name="ListingAgentFirstName" tabindex="165" /></div>
							<div class="col-md-2">&nbsp;</div>
							<div class="col-md-2 labelright"><label for="ListingAgentLastName">Last Name</label></div>
							<div class="col-md-2"><input type="text" class="form-control capitalize" name="ListingAgentLastName" tabindex="166" /></div>
							<div class="col-md-2">&nbsp;</div>
						</div>					
						<div class="row row-pad">					
							<div class="col-md-2 labelright"><label for="ListingAgentAddress1">Address</label></div>
							<div class="col-md-2"><input type="text" class="form-control capitalize" name="ListingAgentAddress1" tabindex="167" /></div>
							<div class="col-md-2">&nbsp;</div>
							<div class="col-md-2 labelright"><label for="ListingAgentState">State</label></div>
							<div class="col-md-2">
								<select name="ListingAgentState" class="state" tabindex="170">
									<?php include('states.php'); ?>
								</select>
								</div>
						</div>									
						<div class="row row-pad">					
							<div class="col-md-2">&nbsp;</div>
							<div class="col-md-2"><input type="text" class="form-control capitalize" name="ListingAgentAddress2" tabindex="168" /></div>
							<div class="col-md-2">&nbsp;</div>
							<div class="col-md-2 labelright"><label for="ListingAgentZip">Zip</label></div>
							<div class="col-md-2"><input type="text" name="ListingAgentZip" tabindex="171" class="form-control" /></div>
						</div>					
						<div class="row row-pad">					
							<div class="col-md-2 labelright"><label for="ListingAgentCity">City</label></div>
							<div class="col-md-2"><input type="text" class="form-control capitalize" name="ListingAgentCity" tabindex="169" /></div>
						</div>	
						<div class="row row-pad">
							<div class="col-md-2 labelright"><label for="ListingAgentPhone">Phone</label></div>
							<div class="col-md-2"><input type="text" class="form-control phone" name="ListingAgentPhone" tabindex="172" /></div>
							<div class="col-md-2">&nbsp;</div>
							<div class="col-md-2 labelright"><label for="ListingAgentPhoneMobile">Mobile</label></div>
							<div class="col-md-2"><input type="text" class="form-control phone" name="ListingAgentPhoneMobile" tabindex="173" /></div>
							<div class="col-md-2">&nbsp;</div>
						</div>
						<div class="row row-pad">
							<div class="col-md-2 labelright"><label for="ListingAgentEmail">Email</label></div>
							<div class="col-md-2"><input type="text" name="ListingAgentEmail" tabindex="174" class="form-control" /></div>
							<div class="col-md-2">&nbsp;</div>
							<div class="col-md-2 labelright"><label for="ListingAgentFax">Fax</label></div>
							<div class="col-md-2"><input type="text" class="form-control phone" name="ListingAgentFax" tabindex="175" /></div>
							<div class="col-md-2">&nbsp;</div>
						</div>				
						
					</td>
					</tr>
				</table>
				
				
				<table class="orderFormTable">
					<tr><td class="orderFormSectionHeader">Selling Agent</td></tr>
					<tr>
					<td class="orderFormSection">							
						<div class="row row-pad">
							<div class="col-md-2 labelright"><label for="SellingAgent">Company Name</label></div>
							<div class="col-md-2"><input type="text" class="form-control capitalize" name="SellingAgent" tabindex="176" /></div>
						</div>					
		
						<div class="row row-pad">
							<div class="col-md-2 labelright"><label for="SellingAgentFirstName">First Name</label></div>
							<div class="col-md-2"><input type="text" class="form-control capitalize" name="SellingAgentFirstName" tabindex="177" /></div>
							<div class="col-md-2">&nbsp;</div>
							<div class="col-md-2 labelright"><label for="SellingAgentLastName">Last Name</label></div>
							<div class="col-md-2"><input type="text" class="form-control capitalize" name="SellingAgentLastName" tabindex="178" /></div>
							<div class="col-md-2">&nbsp;</div>
						</div>
						
						<div class="row row-pad">					
							<div class="col-md-2 labelright"><label for="SellingAgentAddress1">Address</label></div>
							<div class="col-md-2"><input type="text" class="form-control capitalize" name="SellingAgentAddress1" tabindex="179" /></div>
							<div class="col-md-2">&nbsp;</div>
							<div class="col-md-2 labelright"><label for="SellingAgentState">State</label></div>
							<div class="col-md-2">
								<select name="SellingAgentState" class="state" tabindex="182">
									<?php include('states.php'); ?>
								</select>
							</div>
							<div class="col-md-2">&nbsp;</div>
						</div>		
								
						<div class="row row-pad">					
							<div class="col-md-2">&nbsp;</div>
							<div class="col-md-2"><input type="text" class="form-control capitalize" name="SellingAgentAddress2" tabindex="180" /></div>
							<div class="col-md-2">&nbsp;</div>
							<div class="col-md-2 labelright"><label for="SellingAgentZip">Zip</label></div>
							<div class="col-md-2"><input type="text" name="SellingAgentZip" tabindex="183" class="form-control" /></div>
							<div class="col-md-2">&nbsp;</div>
						</div>					
						<div class="row row-pad">					
							<div class="col-md-2 labelright"><label for="SellingAgentCity">City</label></div>
							<div class="col-md-2"><input type="text" class="form-control capitalize" name="SellingAgentCity" tabindex="181" /></div>
						</div>	
						<div class="row row-pad">
							<div class="col-md-2 labelright"><label for="SellingAgentPhone">Phone</label></div>
							<div class="col-md-2"><input type="text" class="form-control phone" name="SellingAgentPhone" tabindex="184" /></div>
							<div class="col-md-2">&nbsp;</div>
							<div class="col-md-2 labelright"><label for="SellingAgentPhoneMobile">Mobile</label></div>
							<div class="col-md-2"><input type="text" class="form-control phone" name="SellingAgentPhoneMobile" tabindex="185" /></div>
							<div class="col-md-2">&nbsp;</div>
						</div>
						<div class="row row-pad">
							<div class="col-md-2 labelright"><label for="SellingAgentEmail">Email</label></div>
							<div class="col-md-2"><input type="text" name="SellingAgentEmail" tabindex="186" class="form-control" /></div>
							<div class="col-md-2">&nbsp;</div>
							<div class="col-md-2 labelright"><label for="SellingAgentFax">Fax</label></div>
							<div class="col-md-2"><input type="text" class="form-control phone" name="SellingAgentFax" tabindex="187" /></div>
							<div class="col-md-2">&nbsp;</div>
						</div>					
	
					</td>
					</tr>
				</table>
				
				<table class="orderFormTable">
					<tr><td class="orderFormSectionHeader">Lender</td></tr>
					<tr>
					<td class="orderFormSection">					
						<div class="row row-pad">
							<div class="col-md-2 labelright"><label for="LenderName">Company Name</label></div>
							<div class="col-md-2"><input type="text" class="form-control capitalize" name="LenderName" tabindex="188" /></div>
							<div class="col-md-2">&nbsp;</div>
						</div>						
						<div class="row row-pad">
							<div class="col-md-2 labelright"><label for="LenderFirstName">First Name</label></div>
							<div class="col-md-2"><input type="text" class="form-control capitalize" name="LenderFirstName" tabindex="190" /></div>
							<div class="col-md-2">&nbsp;</div>
							<div class="col-md-2 labelright"><label for="LenderLastName">Last Name</label></div>
							<div class="col-md-2"><input type="text" class="form-control capitalize" name="LenderLastName" tabindex="191" /></div>
							<div class="col-md-2">&nbsp;</div>
						</div>
						<div class="row row-pad">					
							<div class="col-md-2 labelright"><label for="LenderAddress1">Address</label></div>
							<div class="col-md-2"><input type="text" class="form-control capitalize" name="LenderAddress1" tabindex="192" /></div>
							<div class="col-md-2">&nbsp;</div>
							<div class="col-md-2 labelright"><label for="LenderState">State</label></div>
							<div class="col-md-2">
								<select name="LenderState" class="state" tabindex="195">
									<?php include('states.php'); ?>
								</select>
							</div>
							<div class="col-md-2">&nbsp;</div>
						</div>								
						<div class="row row-pad">					
							<div class="col-md-2">&nbsp;</div>
							<div class="col-md-2"><input type="text" class="form-control capitalize" name="LenderAddress2" tabindex="193" /></div>
							<div class="col-md-2">&nbsp;</div>
							<div class="col-md-2 labelright"><label for="LenderZip">Zip</label></div>
							<div class="col-md-2"><input type="text" name="LenderZip" class="form-control" tabindex="196" /></div>
							<div class="col-md-2">&nbsp;</div>
						</div>					
						<div class="row row-pad">					
							<div class="col-md-2 labelright"><label for="LenderCity">City</label></div>
							<div class="col-md-2"><input type="text" class="form-control capitalize" name="LenderCity" tabindex="194" /></div>
						</div>	
						<div class="row row-pad">
							<div class="col-md-2 labelright"><label for="LenderPhone">Phone</label></div>
							<div class="col-md-2"><input type="text" class="form-control phone" name="LenderPhone" tabindex="197" /></div>
							<div class="col-md-2">&nbsp;</div>
							<div class="col-md-2 labelright"><label for="LenderPhoneMobile">Mobile</label></div>
							<div class="col-md-2"><input type="text" class="form-control phone" name="LenderPhoneMobile" tabindex="198" /></div>
							<div class="col-md-2">&nbsp;</div>
						</div>
						<div class="row row-pad">
							<div class="col-md-2 labelright"><label for="LenderEmail">Email</label></div>
							<div class="col-md-2"><input type="text" name="LenderEmail" tabindex="199" class="form-control" /></div>
							<div class="col-md-2">&nbsp;</div>
							<div class="col-md-2 labelright"><label for="LenderFax">Fax</label></div>
							<div class="col-md-2"><input type="text" class="phone" name="LenderFax" tabindex="200" class="form-control" /></div>
							<div class="col-md-2">&nbsp;</div>
						</div>	
						
					</td>
					</tr>
				</table>
				
				<table class="orderFormTable">
					<tr><td class="orderFormSectionHeader">Builder</td></tr>
					<tr>
					<td class="orderFormSection">			
						<div class="row row-pad">
							<div class="col-md-2 labelright"><label for="BuilderName">Company Name</label></div>
							<div class="col-md-2"><input type="text" class="form-control capitalize" name="BuilderName" tabindex="201" /></div>
							<div class="col-md-2">&nbsp;</div>
						</div>					
						<div class="row row-pad">
							<div class="col-md-2 labelright"><label for="BuilderFirstName">First Name</label></div>
							<div class="col-md-2"><input type="text" class="form-control capitalize" name="BuilderFirstName" tabindex="202" /></div>
							<div class="col-md-2">&nbsp;</div>
							<div class="col-md-2 labelright"><label for="BuilderLastName">Last Name</label></div>
							<div class="col-md-2"><input type="text" class="form-control capitalize" name="BuilderLastName" tabindex="203" /></div>
							<div class="col-md-2">&nbsp;</div>
						</div>				
						<div class="row row-pad">					
							<div class="col-md-2 labelright"><label for="BuilderAddress1">Address</label></div>
							<div class="col-md-2"><input type="text" class="form-control capitalize" name="BuilderAddress1" tabindex="204" /></div>
							<div class="col-md-2">&nbsp;</div>
							<div class="col-md-2 labelright"><label for="BuilderState">State</label></div>
							<div class="col-md-2">
								<select name="BuilderState" class="state" tabindex="207">
									<?php include('states.php'); ?>
								</select>	
							</div>
							<div class="col-md-2">&nbsp;</div>
						</div>								
						<div class="row row-pad">					
							<div class="col-md-2">&nbsp;</div>
							<div class="col-md-2"><input type="text" class="form-control capitalize" name="BuilderAddress2" tabindex="205" /></div>
							<div class="col-md-2">&nbsp;</div>
							<div class="col-md-2 labelright"><label for="BuilderZip">Zip</label></div>
							<div class="col-md-2"><input type="text" name="BuilderZip" tabindex="208" class="form-control" /></div>
							<div class="col-md-2">&nbsp;</div>
						</div>					
						<div class="row row-pad">					
							<div class="col-md-2 labelright"><label for="BuilderCity">City</label></div>
							<div class="col-md-2"><input type="text" class="form-control capitalize" name="BuilderCity" tabindex="206" /></div>
						</div>	
						<div class="row row-pad">
							<div class="col-md-2 labelright"><label for="BuilderPhone">Phone</label></div>
							<div class="col-md-2"><input type="text" class="form-control phone" name="BuilderPhone" tabindex="209" /></div>
							<div class="col-md-2">&nbsp;</div>
							<div class="col-md-2 labelright"><label for="BuilderPhoneMobile">Mobile</label></div>
							<div class="col-md-2"><input type="text" class="form-control phone" name="BuilderPhoneMobile" tabindex="210" /></div>
							<div class="col-md-2">&nbsp;</div>
						</div>
						<div class="row row-pad">
							<div class="col-md-2 labelright"><label for="BuilderEmail">Email</label></div>
							<div class="col-md-2"><input type="text" name="BuilderEmail" tabindex="211" class="form-control" /></div>
							<div class="col-md-2">&nbsp;</div>
							<div class="col-md-2 labelright"><label for="BuilderFax">Fax</label></div>
							<div class="col-md-2"><input type="text" class="form-control phone" name="BuilderFax" tabindex="212" /></div>
							<div class="col-md-2">&nbsp;</div>
						</div>	
					
					</td>
					</tr>
				</table>
				
				<table class="orderFormTable">
					<tr><td class="orderFormSectionHeader">Documents</td></tr>
					<tr>
					<td class="orderFormSection">
		
						<div class="row row-pad">
							<div class="col-md-2 labelright"><label for="woefile">Documents</label></div>
							<div class="col-4-6"><input type="file" name="woeFile" id="woeFile" /></div>
						</div>
						<div class="row row-pad">
							<div class="col-md-2">&nbsp;</div>
							<div class="col-4-6">To upload more than one file please put multiple files into a zipped folder.</div>
						</div>
						<div class="row row-pad">
							<div class="col-md-2 labelright"><label for="Notes">Notes</label></div>
							<div class="col-4-6"><textarea name="Notes" rows="5" cols="50" tabindex="215" class="form-control"></textarea></div>
						</div>
						
					</td>
					</tr>
				</table>
					
				<table class="orderFormTable">
					<tr><td class="orderFormSectionHeader">Confirmation</td></tr>
					<tr>
					<td class="orderFormSection">

						<div class="row row-pad">
							<div class="col-md-2"></div>
							<div class="col-4-6">Please enter your email address for order confirmation</div>
						</div>						
		
						<div class="row row-pad">
							<div class="col-md-2 labelright"><label for="woefile">Email</label></div>
							<div class="col-4-6"><input class="form-control required" type="text" name="email" id="email" size="40" /></div>
						</div>

						
					</td>
					</tr>
				</table>
									
				<div class="orderFormSection">	
					<input type="submit" value="Submit Order" />
				</div>
						
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
