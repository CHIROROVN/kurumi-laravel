@extends('frontend.frontend')

@section('content')

<style type="text/css">
  .error-input {
    color: red;
    margin-top: 5px;
    display: block;
    width: 100% !important;
    font-weight: bold;
  }

</style>
<!--Content -->

<section class="clear" id="contact">
  <!--Frame01 -->
    <div class="frame01">
      <div class="container">
        <h1 class="title-content"><img src="{{ asset('') }}public/frontend/image/contact/title.png" alt="" /></h1>
        <div class="info">
          <div class="box-text1">
            <img src="{{ asset('') }}public/frontend/image/contact/text1-frame01.png" alt="" />
          </div>
          <img src="{{ asset('') }}public/frontend/image/contact/text-frame01.png" alt="" />
          <div class="box-text2">
            <img src="{{ asset('') }}public/frontend/image/contact/text2-frame01.png" alt="" />
          </div>
        </div>
      </div>
    </div>
  <!--End frame01 -->
  <!--Frame02 -->
    <div class="frame02">
      <div class="container">
        <h2 class="title"><img src="{{ asset('') }}public/frontend/image/contact/title1-h2.png" alt="" /></h2>

        <!-- form -->
        {!! Form::open(array('route' => 'frontend.contact.index', 'enctype'=>'multipart/form-data')) !!}
        <div class="content">
          <ul>
            <li><a href="" title=""><img src="{{ asset('') }}public/frontend/image/contact/text1-frame02.png" alt="" /></a></li>
            <li><a href="" title=""><img src="{{ asset('') }}public/frontend/image/contact/text2-frame02.png" alt="" /></a></li>
            <li><a href="" title=""><img src="{{ asset('') }}public/frontend/image/contact/text3-frame02.png" alt="" /></a></li>
          </ul>
          <div class="text-message">※ は必須項目です。</div>
          <table class="form-input">
            <tr>
              <td class="title"><span>※ </span>お名前</td>
              <td>
                @if ( isset($back['name']) )
                <input type="text" name="name" value="{{ $back['name'] }}" />
                @else
                <input type="text" name="name" value="{{ old('name') }}" />
                @endif
                @if ($errors->first('name'))<span class="error-input">{!! $errors->first('name') !!}</span>@endif
              </td>
            </tr>
            <tr>
              <td class="title">お名前（フリガナ</td>
              <td>
                @if ( isset($back['name_kana']) )
                <input type="text" name="name_kana" value="{{ $back['name_kana'] }}" />
                @else
                <input type="text" name="name_kana" value="{{ old('name_kana') }}" />
                @endif
                @if ($errors->first('name_kana'))<span class="error-input">{!! $errors->first('name_kana') !!}</span>@endif
              </td>
            </tr>
            <tr>
              <td class="title"><span>※ </span>会社名</td>
              <td>
                @if ( isset($back['company']) )
                <input type="text" name="company" value="{{ $back['company'] }}" />
                @else
                <input type="text" name="company" value="{{ old('company') }}" />
                @endif
                @if ($errors->first('company'))<span class="error-input">{!! $errors->first('company') !!}</span>@endif
              </td>
            </tr>
            <tr>
              <td class="title"><span>※ </span>郵便番号</td>
              <td>
                @if ( isset($back['zipcode']) )
                <input type="text" name="zipcode" value="{{ $back['zipcode'] }}" />
                @else
                <input type="text" name="zipcode" value="{{ old('zipcode') }}" />
                @endif
                @if ($errors->first('zipcode'))<span class="error-input">{!! $errors->first('zipcode') !!}</span>@endif
              </td>
            </tr>
            <tr>
              <td class="title"><span>※ </span>ご住所</td>
              <td>
                @if ( isset($back['address']) )
                <input type="text" name="address" value="{{ $back['address'] }}" />
                @else
                <input type="text" name="address" value="{{ old('address') }}" />
                @endif
                @if ($errors->first('address'))<span class="error-input">{!! $errors->first('address') !!}</span>@endif
              </td>
            </tr>
            <tr>
              <td class="title"><span>※ </span>電話番号</td>
              <td>
                @if ( isset($back['phone']) )
                <input type="text" name="phone" value="{{ $back['phone'] }}" />
                @else
                <input type="text" name="phone" value="{{ old('phone') }}" />
                @endif
                @if ($errors->first('phone'))<span class="error-input">{!! $errors->first('phone') !!}</span>@endif
              </td>
            </tr>
            <tr>
              <td class="title"><span></span>FAX番号</td>
              <td>
                @if ( isset($back['fax']) )
                <input type="text" name="fax" value="{{ $back['fax'] }}" />
                @else
                <input type="text" name="fax" value="{{ old('fax') }}" />
                @endif
                @if ($errors->first('fax'))<span class="error-input">{!! $errors->first('fax') !!}</span>@endif
              </td>
            </tr>
            <tr>
              <td class="title"><span>※ </span>メールアドレス</td>
              <td>
                @if ( isset($back['email']) )
                <input type="text" name="email" value="{{ $back['email'] }}" />
                @else
                <input type="text" name="email" value="{{ old('email') }}" />
                @endif
                @if ($errors->first('email'))<span class="error-input">{!! $errors->first('email') !!}</span>@endif
              </td>
            </tr>
            <tr>
              <td class="title"><span>※ </span>お問い合わせの種類</td>
              <td>
                <div class="radio">
                  @if ( isset($back['type_message']) && $back['type_message'] == '1' )
                  <input type="radio" name="type_message" value="1" checked="" /> サーバーについて
                  @elseif ( old('type_message') == 1 )
                  <input type="radio" name="type_message" value="1" checked="" /> サーバーについて
                  @else
                  <input type="radio" name="type_message" value="1" /> サーバーについて
                  @endif
                </div>
                <div class="radio">
                  @if ( isset($back['type_message']) && $back['type_message'] == '2' )
                  <input type="radio" name="type_message" value="2" checked="" /> ドメインについて
                  @elseif ( old('type_message') == 2 )
                  <input type="radio" name="type_message" value="2" checked="" /> ドメインについて
                  @else
                  <input type="radio" name="type_message" value="2" /> ドメインについて
                  @endif
                </div>
                <div class="radio">
                  @if ( isset($back['type_message']) && $back['type_message'] == '3' )
                  <input type="radio" name="type_message" value="3" checked="" /> その他
                  @elseif ( old('type_message') == 3 )
                  <input type="radio" name="type_message" value="3" checked="" /> その他
                  @else
                  <input type="radio" name="type_message" value="3" /> その他
                  @endif
                </div>
                @if ($errors->first('type_message'))<span class="error-input" style="float: left; width: 100%;">{!! $errors->first('type_message') !!}</span>@endif
              </td>
            </tr>
            <tr>
              <td class="title"><span>※ </span>お問い合わせ内容</td>
              <td>
                @if ( isset($back['content']) )
                <textarea rows="4" cols="12" name="content">{{ $back['content'] }}</textarea>
                @else
                <textarea rows="4" cols="12" name="content">{{ old('content') }}</textarea>
                @endif
                @if ($errors->first('content'))<span class="error-input">{!! $errors->first('content') !!}</span>@endif
              </td>
            </tr>
          </table>
          <p>※ 個人情報の取扱について<br />弊社の「<span style="text-decoration:underline;">プライバシーポリシー</span>」をご確認の上、ご同意いただき送信をお願いいたします。</p>
          <div class="check-agree">
            <!--<input type="checkbox" name="checkbox" /> -->
            <input id="ckagree" name="agree" value="1" type="checkbox" >
            <label for="ckagree"></label>
            <label>同意する</label>
          </div>
          <div class="">
            @if ($errors->first('agree'))<span class="error-input">{!! $errors->first('agree') !!}</span>@endif
          </div>
          <div class="box-submit">
            <input type="submit" value="" name="save" class="btn-submit"/>
          <div>
        </div>
        </form>
        <!-- end form -->

      </div>
    </div>
  <!--End frame02 -->
</section>

<!-- End content -->
@endsection