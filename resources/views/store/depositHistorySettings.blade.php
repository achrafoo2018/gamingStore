@extends('store.userSettings')
@section('depositHistory')

<div class="tab-pane active" id="deposit_history" role="tabpanel">

    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped table-bordered mydatatable" id="historyTable2">
                <thead>
                    <th>Code</th>
                    <th>Amount</th>
                    <th>Type</th>
                    <th>Status</th>
                    <th>Date</th>
                </thead>
                <tbody>
                    @foreach ($depositHistory as $item)
                    <tr>
                        <td><b class="badge badge-success">{{$item->code}}</b></td>
                        <td><b class="text-success">{{$item->amount}} TND</b></td>
                        <td><b>@if ($item->type == 0)
                            Bank Transfer
                        @else
                            D17
                        @endif</b></td>
                        <td><span class="@php
                            switch ($item->status) {
                                case 0:
                                    echo "badge badge-warning";
                                    break;
                                case 1:
                                    echo "badge badge-success";
                                    break;
                                default:
                                    echo "badge badge-danger";
                                    # code...
                                    break;
                            }
                        @endphp">
                        @php
                            switch ($item->status) {
                            case 0:
                                echo "Pending";
                                break;
                            case 1:
                                echo "Approved";
                                break;
                            default:
                                echo "Ignored";
                                # code...
                                break;
                            }
                        @endphp
                        </span></td>
                        <td><b>{{$item->created_at}}</b></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


</div>

@endsection
