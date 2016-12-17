@extends('layouts.internal')
@section('page-title')
    <i class="eloji eloji-intelliship"></i> Intelliship
@overwrite
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title white">
                            <i class="eloji eloji-hi"></i> Users
                            <small>({{ sizeof($users) }})</small>
                        </h3>
                    </div>
                    <table class="table table-condensed">
                        <tr class="tr">
                            <th>Company</th>
                            <th>Accounts</th>
                            <th>Contact</th>
                            <th>Location</th>
                            <th>Created</th>
                        </tr>
                        @forelse($users as $user)
                            <tr>
                                <td>
                                    <a href="{{ url('internal/intelliship/users/'.$user->id) }}">
                                        {{ $user->contact_company }}
                                    </a>
                                </td>
                                <td>
                                    @if($user->hasUps())
                                        UPS
                                    @endif
                                    @if($user->hasFedex())
                                        Fedex
                                    @endif
                                </td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->contact_city }}, {{ $user->contact_state }}</td>
                                <td>{{ $user->createdAt() }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">
                                    <h3 class="text-center">
                                        Whoops! Doesn't look like there are any users yet... <br>
                                        <small>Wait a little, they'll come... hopefuly...</small>
                                    </h3>
                                </td>
                            </tr>
                        @endforelse
                    </table>
                    <div class="panel-footer text-right">
                        {{--TODO: --}}
                        {{-- $users->links() --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop