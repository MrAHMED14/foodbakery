@props(['order'])

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div class="order-list">
        <div class="author-info">
            <div class="img-holder">
                <figure>
                    <a href="#"><img src="{{asset('front/extra-images/listing-logo18.png')}}" alt=""> </a>
                </figure>
            </div>
            <div class="text-holder">
                <h6><a href="#">{{ $order->restaurant->name }}</a></h6>
                <address>{{ $order->restaurant->address }}</address>
                <span class="price">£ {{ $order->total }}</span>
            </div>
        </div>
        <div class="post-time">
            <span>{{ $order->address }}, {{ $order->city }}, {{ $order->state }}</span>
            <span>Deliver in 10 Minutes </span>
        </div>
        <span class="date-time">{{ \Carbon\Carbon::parse($order->order_date)->format('M j, Y h:i A') }}</span>

        <div class="order-btn">
            <a href="#" data-toggle="modal" data-target={{ "#order_detail_". $order->id }}>Order Detail</a>
            <span class="order-status" style="background-color: #1e73be;">Processing</span>
        </div>
        <div class="modal fade menu-order-detail order-detail" id={{ "order_detail_". $order->id }} tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h2>Order Detail</h2>
                    </div>
                    <div class="modal-body">
                        <div class="order-detail-inner">
                            <div class="description-holder">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="list-detail-options has-checkbox">
                                            <h3>{{ $order->restaurant->name }}</h3>
                                            <ul class="order-detail-options">
                                                <li class="order-number">
                                                    <strong>Order ID:</strong>
                                                    <span>FB{{ sprintf('%05d', $order->id) }}</span>
                                                </li>
                                                <li class="req-delivery">
                                                    <strong>Delivery Time:</strong>
                                                    <span>10 Minutes </span>
                                                </li>
                                                <li class="created-date">
                                                    <strong>Delivery Date:</strong>
                                                    <span>{{ \Carbon\Carbon::parse($order->order_date)->format('M j, Y h:i A') }}</span>
                                                </li>
                                                <li class="order-type">
                                                    <strong>Type:</strong>
                                                    <span>{{ $order->order_type }}</span>
                                                </li>
                                                <li class="order-type">
                                                    <strong>Payment Status:</strong>
                                                    <span>{{ $order->payment_status }}</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="customer-detail-holder">
                                            <h3>Customer Detail</h3>
                                            <ul class="customer-detail">
                                                <li>
                                                    <strong>Name :</strong>
                                                    <span>{{ $order->user->name }}</span>
                                                </li>
                                                <li>
                                                    <strong>Phone Number :</strong>
                                                    <span>{{ $order->user->phone }}</span>
                                                </li>
                                                <li>
                                                    <strong>Email :</strong>
                                                    <span>{{ $order->user->email }}</span>
                                                </li>
                                                <li>
                                                    <strong>Address :</strong>
                                                    <span>{{ $order->address }}, {{ $order->city }}, {{ $order->state }}</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="order-status-holder">
                                            <div class="order-status-process order-status">
                                                <p style="background:#047a06;">Your order is completed </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <h2 class="heading">Food Menu</h2>
                                        <div class="responsive-table">
                                            <ul class="categories-order table-generic">
                                                <li class="order-heading-titles">
                                                    <div>Products</div>
                                                    <div>Price per</div>
                                                </li>

                                                @foreach ($order->orderLines as $orderItem)
                                                <li class="order-heading-titles">
                                                    <div>
                                                        <h4>{{ $orderItem->dish->name }}</h4>
                                                    </div>
                                                    <div><span class="category-price">${{ $orderItem->dish->price }} × {{ $orderItem->quantity }}</span></div>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <h3 class="order-type total-price">
                                                    <strong>Total:</strong>
                                                    <span>£ {{ $order->total }}</span>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            (function ($) {
                $(document).ready(function () {
                    $(".order-detail .modal-dialog .modal-content").mCustomScrollbar({
                        setHeight: 724,
                        theme: "minimal-dark",
                        mouseWheelPixels: 100
                    });
                });
            })(jQuery);
        </script>
    </div>
</div>
