<!DOCTYPE html>
<html>
<head>
    <title>Order Receipt  </title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 40px;
            color: #000;
        }

        .header, .footer {
            text-align: center;
        }

        .header img {
            height: 80px;
        }

        h2 {
            margin-top: 30px;
            font-size: 20px;
            text-align: center;
        }

        .billing-info, .invoice-info {
            display: inline-block;
            vertical-align: top;
            width: 48%;
        }

        .invoice-info {
            text-align: right;
        }

        table {
            width: 100%;
            margin-top: 30px;
            border-collapse: collapse;
        }

        table th, table td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        table th {
            background-color: #f5f5f5;
        }

        .total-row td {
            border: none;
            text-align: right;
            font-weight: bold;
        }

        .footer-info {
            margin-top: 60px;
            font-size: 14px;
            text-align: center;
        }

        .thank-you {
            margin-top: 40px;
            font-size: 18px;
            text-align: center;
        }

        @media print {
            body {
                margin: 0;
            }
        }

        @page {
            size: A4;
            margin: 20mm;
        }

    </style>
</head>
<body>
    <div class="header">
        <img src="{{ asset('front/extra-images/foodbakery.svg') }}" alt="Company Logo" style="margin-bottom: 80px; height: 30px; width: 100%;">
    </div>

    <div>
        <div class="billing-info">
            <strong>Billed To:</strong><br>
            {{ $order->user->name }}<br>
            {{ $order->user->phone ?? '-' }}<br>
            {{ $order->address }}, {{ $order->commune }}, {{ $order->wilaya }}
            <br>
            <strong>Payment method:</strong> {{ $order->payment_method }}
        </div>

        <div class="invoice-info">
            <strong>Invoice No:</strong> #{{ $order->id }}<br>
            <strong>Date:</strong> {{ \Carbon\Carbon::parse($order->order_date)->format('M j, Y h:i A') }}
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th>Item</th>
                <th>Quantity</th>
                <th>Unit Price</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach($order->orderLines as $line)
                <tr>
                    <td>{{ $line->dish->name }}</td>
                    <td>{{ $line->quantity }}</td>
                    <td>@currency($line->dish->price)</td>
                    <td>@currency($line->dish->price * $line->quantity)</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <table>
        <tr class="total-row">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>Total</td>
            <td>@currency($order->total)</td>
        </tr>
    </table>

    <div class="footer-info">
        <strong>{{ $order->restaurant->name }}</strong><br>
        {{ $order->restaurant->address ?? '123 Restaurant St, commune, wilaya' }}<br>
        {{ $order->restaurant->phone ?? '(123) 456-7890' }}
    </div>

    <script>
        window.onload = function () {
            window.print();

            window.onafterprint = function () {
                window.close();

                setTimeout(function () {
                    if (!window.closed) {
                        window.location.href = "{{ url('/') }}";
                    }
                }, 1000);
            };
        };
    </script>
</body>
</html>
