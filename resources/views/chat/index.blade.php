@extends('layouts.app')


@section('content')
<div id="message">



  @php $last = 0; @endphp
  @foreach($message as $key => $value)
    @if($value['id'] == $id)
      <div class="send">
        {{ $value['message'] }}
      </div>
    @else
      <div class="recieve">
        {{ $value['message'] }}
      </div>
    @endif

    @php $last = $value['id']; @endphp
  @endforeach


</div>

  <input type="text" name="" value="" id="input">
  <button type="buton" name="button" id="send">送信</button>
@endsection


@section('js')

<script type="text/javascript">
$(function(){

  let last = {{ $last }};
  let id = {{ $id }};
  let recieve = {{ $receiveId }};
  function get_data() {
    $.ajax({
            url :"/kosho/public/api/chat",
            type: 'post',
            data: {
              last: last,
              id : id,
              recieve : recieve,
             },
            dataType: 'json',
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
          },
        )
        // 検索成功時にはページに結果を反映
        .done(function(data) {
          // console.log(data);
          let data_ = data["data"];
          // console.log(data_);
          for(let i = 0; i < data_.length; i ++){
              $('#message').append('<div class="recieve">' + data_[i][0] + '</div>');
              last = data_[i][1];
          }

       setTimeout(get_data(), 50000);
          // 結果リストをクリア
        })
        // 検索失敗時には、その旨をダイアログ表示
        .fail(function (jqXHR, textStatus, errorThrown) {
                    // 通信失敗時の処理
                    console.log("ajax通信に失敗しました");
                    console.log("jqXHR          : " + jqXHR.status); // HTTPステータスが取得
                    console.log("textStatus     : " + textStatus);    // タイムアウト、パースエラー
                    console.log("errorThrown    : " + errorThrown.message); // 例外情報
            });
  }


  $('#send').click(function(){
      let input = $('#input').val();
      if(input == ""){
        return;
      }

      // console.log(input);
      $.ajax({
              url :"/kosho/public/api/chat/send",
              type: 'post',
              data: {
                data: input,
                id : id,
                recieve : recieve,
               },
              dataType: 'json',

              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
            },
          )
          // 検索成功時にはページに結果を反映
          .done(function(data) {
            $('#message').append('<div class="send">' + data['comments'] + '</div>');
            $('#input').val('');

            // 結果リストをクリア
          })
          // 検索失敗時には、その旨をダイアログ表示
          .fail(function (jqXHR, textStatus, errorThrown) {
                    // 通信失敗時の処理
                    console.log("ajax通信に失敗しました");
                    console.log("jqXHR          : " + jqXHR.status); // HTTPステータスが取得
                    console.log("textStatus     : " + textStatus);    // タイムアウト、パースエラー
                    console.log("errorThrown    : " + errorThrown.message); // 例外情報
            });
  });

  $("#input").keypress(function(e) {
    if(e.which == 13) {
      /* 処理内容 */
          let input = $('#input').val();
          if(input == ""){
            return;
          }

          // console.log(input);
          $.ajax({
                  url :"/kosho/public/api/chat/send",
                  type: 'post',
                  data: {
                    data: input,
                    id : id,
                    recieve : recieve,
                   },
                  dataType: 'json',

                  headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                },
              )
              // 検索成功時にはページに結果を反映
              .done(function(data) {
                $('#message').append('<div class="send">' + data['comments'] + '</div>');
                $('#input').val('');

                // 結果リストをクリア
              })
              // 検索失敗時には、その旨をダイアログ表示
              .fail(function (jqXHR, textStatus, errorThrown) {
                        // 通信失敗時の処理
                        console.log("ajax通信に失敗しました");
                        console.log("jqXHR          : " + jqXHR.status); // HTTPステータスが取得
                        console.log("textStatus     : " + textStatus);    // タイムアウト、パースエラー
                        console.log("errorThrown    : " + errorThrown.message); // 例外情報
                });
    }
  });



  get_data();
});
</script>


@endsection
