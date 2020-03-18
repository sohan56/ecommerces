<!DOCTYPE html>
<html><head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>{{ _lang('Metro Lab') }}</title>
	
	
	<!-- Favicon -->
	<link rel="icon" href="https://www.sparksuite.com/images/favicon.png" type="image/x-icon">
	
	<!-- Invoice styling -->
	<style>

		@media print {
			body {
				margin: 1.2cm;
				-webkit-print-color-adjust: exact;
			}
		}
		@media print {
			.invoice-box{box-shadow: none !important; border:0 !important;}

		}

		    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
        min-height: 590px;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    
	</style>
</head>

<body>
	<div class="invoice-box" id="content2">
		<table cellspacing="0" cellpadding="0">
			<tbody>
				<tr class="top">
					<td colspan="4">
						<table>
							<tbody>
								<tr>
									<td class="title">
										<img src="{{ asset('public/logo.png') }}" style="width:100%; max-width:300px;">
									</td>

									<td>
										{{ _lang('Invoice') }} #: {{ $order->id }}<br>
										{{ _lang('Created') }}: {{ date_format($order->created_at, 'Y M d') }}<br>
									</td>
								</tr>
							</tbody></table>
						</td>
					</tr>

					<tr class="information">
						<td colspan="4">
							<table>
								<tbody>
									<tr>
										<td>
											Shopify Store.<br>
											12345 Sunny Road<br>
											Sunnyville, TX 12345
										</td>

										<td>
											{{ $order->customer_name }}<br>
											{{ $order->address }}<br>
											{{ $order->email_address }}
										</td>
									</tr>
								</tbody></table>
							</td>
						</tr>

						<tr class="details">
							<td>
								{{ _lang('Payment Method') }}
							</td>

							<td colspan="3">
								{{ $order->payment_type }}
							</td>
						</tr>

						<tr class="heading">
							<td>
								Item
							</td>
							<td>
								Qty
							</td>
							<td>
								Price
							</td>
							<td>
								Total
							</td>
						</tr>
						@foreach (get_table('order_items', ['order_id' => $order->id]) as $order_item)
						<tr class="item">
							<td>
								{{ $order_item->product_name }}
							</td>
							<td>
								{{ $order_item->qty }}
							</td>
							<td>
								{{ $order_item->price }}
							</td>
							<td>
								{{ $order_item->qty * $order_item->price }}
							</td>
						</tr>
						@endforeach
						<tr class="total">
							<td>

							</td>

							<td colspan="3">
								{{ _lang('Sub Total') }}: {{ $order->sub_total }}
							</td>
						</tr>
						<tr class="total">
							<td>

							</td>
							<td colspan="3">
								{{ _lang('Tax') }}: {{ $order->tax }}
							</td>
						</tr>
						<tr class="total">
							<td>

							</td>
							<td colspan="3">
								{{ _lang('Total') }}: {{ $order->total_amount }}
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</body>
		</html>
 
<script type="text/javascript">
window.print();
window.onfocus=function(){ window.close();}
</script>