const OrderBarcode = function() {
	const form          = document.querySelector( '#barcode-scan-form form' );
	const loader        = document.getElementById( 'barcode-scan-loader' );
	const input         = document.querySelector( '#barcode-scan-form input#scan-code' );
	const displayResult = document.getElementById( 'barcode-scan-result' );

	// Focus on barcode input field.
	input.focus();

	form.addEventListener( 'submit', ( event ) => {
		event.preventDefault();

		// Show the loader.
		loader.style.display = 'block';

		// Empty existing results.
		displayResult.innerHTML = '';

		const inputAction = document.querySelector( '#barcode-scan-form #scan-action' ).value;
		const request     = new XMLHttpRequest();

		request.open( 'POST', wc_order_barcodes.ajaxurl, true );
		request.setRequestHeader( 'Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8' );
		request.setRequestHeader( 'X-Requested-With', 'XMLHttpRequest' );
		request.onreadystatechange = function() {
			if ( this.readyState === XMLHttpRequest.DONE && 200 === this.status ) {
				// Focus on barcode input field.
				input.focus();

				if ( ! request.response ) {
					return;
				}

				// Hide the loader.
				loader.style.display = 'none';

				// Display response.
				displayResult.innerHTML = request.response;
			}

			return;
		}

		request.send( encodeURI( 'action=scan_barcode&barcode_input=' + input.value + '&scan_action=' + inputAction + '&woocommerce_order_barcodes_scan_nonce=' + wc_order_barcodes.scan_nonce ) );
	} );

	onScan.attachTo( document, {
		reactToPaste: false,
		onScan: function( sCode, iQty ) {
			form.dispatchEvent( new Event( 'submit' ) );
		}
	} );
};

window.onload = OrderBarcode;
