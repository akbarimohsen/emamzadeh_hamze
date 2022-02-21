<div>
    <div>
        <div class="container">
            <div class="main-body">
                <div class="row">
                    @livewire('user.dashboard-sidebar-component',[ 'user' => $user, 'active_number' => 4 ])
                    <div class="col-lg-8">
                        <div class="row justify-content-center m-3">
                            <h4>سفارش های من</h4>
                        </div>
                        <hr>
                        @if(Session::has("deleteOrderMessage"))
                            <script>
                                Swal.fire({
                                icon: 'success',
                                title: 'حذف سفارش',
                                text: '{{ Session::get("deleteOrderMessage") }}'
                            }).then( (result) => {
                                location.reload();
                            })
                            </script>
                        @endif
                        <div class="row mt-5">
                            <div class="col-md-8 col-lg-12 col-sm-10">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>تاریخ</th>
                                            <th>وضعیت</th>
                                            <th>عملیات</th>
                                            <th>جزییات سفارش</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($user->orders as $order)
                                            <tr>
                                                <td> {{ $order->id }} </td>
                                                <td>  {{ Hekmatinasser\Verta\Facades\Verta::instance($order->order_date )->format('Y-n-j H:i') }} </td>
                                                <td>
                                                    @if($order->is_buy)
                                                        <button type="button" class="btn btn-sm btn-outline-success">پرداخت شده</button>
                                                    @else
                                                        <button type="button" class="btn btn-sm btn-outline-warning">پرداخت نشده</button>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($order->is_buy ==0)
                                                    <a href="{{ route('user.order.cart', ['id' => $order->id ]) }}" class="btn btn-primary btn-sm m-1">خرید</a>
                                                    <a href="#" class="btn btn-danger btn-sm m-1" wire:click="deleteOrder({{ $order->id }})">حذف</a>
                                                    @endif
                                                </td>

                                                <td>
                                                    <a href="{{ route('user.order', ['id' => $order->id]) }}" class="btn btn-success btn-sm">جزییات سفارش</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
