@extends('layouts.app')

@section('content')

    <form method='post'
          id='submitForm'
          action='https://ccore.newebpay.com/MPG/mpg_gateway'>
        <input type='text' name='MerchantID' value='{{ $merchantID }}'><br/>
        <input type='text' name='TradeInfo' value='{{ $tradeInfo }}'><br/>
        <input type='text' name='TradeSha' value='{{ $tradeSha }}'><br/>
        <input type='text' name='Version' value='{{ $version }}'><br/>
        <input type='submit' value='submit'>
    </form>

@endsection

@section('inline_js')
    @parent
@endsection
