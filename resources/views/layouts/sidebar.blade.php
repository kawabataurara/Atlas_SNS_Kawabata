
<div id="side-bar">
    <div class="confirm">
        <p>{{ Auth::user()->username }}さんの</p>
        <div class="follow">
            <p>フォロー数</p>
            <p>〇〇名</p>
        </div>
        <a href="/followList" class="follow-btn">フォローリスト</a>

        <div class="follow">
            <p>フォロワー数</p>
            <p>〇〇名</p>
        </div>
        
         <a href="/followerList" class="follow-btn">フォロワーリスト</a>
    </div>
    <p class="btn"><a href="">ユーザー検索</a></p>
</div>
