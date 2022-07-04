let itemList = [
  {'id':'0001', 'name':'ソファベッド', 'price':50000, 'tags':['家具','ベッド','ソファ','寝具']},
  {'id':'0002', 'name':'シングルベッド','price':30000, 'tags':['家具','ベッド','寝具']},
  {'id':'0003', 'name':'子ども用ベッド','price':20000, 'tags':['家具','ベッド','寝具','子ども部屋家具']},
  {'id':'0001', 'name':'ソファ','price':10000, 'tags':['家具','ソファ']},
  {'id':'0002', 'name':'キューブボックス','price':4000, 'tags':['家具','家具・ラック','収納システム']},
  {'id':'0003', 'name':'オープンラック','price':5000, 'tags':['家具','家具・ラック','収納システム']},
  {'id':'0007', 'name':'コンピュータデスク','price':55000, 'tags':['家具','テーブル・椅子']},
  {'id':'0008', 'name':'サイドテーブル','price':4000, 'tags':['家具','テーブル・椅子']},
  {'id':'0009', 'name':'ダイニングテーブル','price':4000, 'tags':['家具','テーブル・椅子']},
  {'id':'0010', 'name':'子ども部屋用収納','price':35000, 'tags':['家具','収納システム', '子ども部屋家具']}
 ];      // 楽曲一覧

//--- データの定義 ---
// 大分類
let cate1 = new Vue({
  el: '#genre',
  data : {
    msgs: ["---","家具","ベッド・マットレス","収納家具・収納グッズ","子ども家具"]  
  }
});
  
// 小分類
let cate2 = new Vue({
  el: '#music_tone',
  data : {
    msgs: ["---","ベッド","マットレス","収納システム","子ども部屋家具"]       
  }
});  
  
let cate3 = new Vue({
  el: '#gender',
  data : {
    msgs: ["男性シンガー","女性シンガー"]
  }
});  


// 楽曲リストを表示する要素を取得
let itemListElement = document.getElementById('itemList');

// 楽曲一覧をtableとして表示
function viewItemList(tag) {
    console.log(tag);
    let target = document.getElementById('itemList');

    // 楽曲一覧を削除
    target.innerHTML = "";

    if (tag !== undefined) {
        let html = "";
        html += "<table>";
        let count = 0;
        for (let i = 0; i < itemList.length; i++) {
            if (itemList[i].tags.some(t => t === tag)) {
                if (count === 0) {
                  html += "<tr>";
                }

                // 楽曲情報
                html += "<td>";
                html += '<img src="" alt="cdジャケット" width="180" height="180" />';
                html += '<p>曲名：&nbsp;' + itemList[i].name + '</p>';
                html += '<p>' + itemList[i].price + '</p>';
                html += '<p>' + "公式サイト" + '</p>';
                html += '<a href='+'>公式サイト</a>';
                html += "</td>";

                if (count == 5)  {   // 商品を横に５つ並べたら次の行に変更
                    html += "</tr>";
                    count = 0;
                } else {
                    count++;
                }
            }
        }
        if (count > 0) html += "</tr>"; // 最後に閉じる
        html += "</table>";
        target.innerHTML = html;
    }
}

function isSearchItem(item, cate1, cate2, cate3) {
       var isHit = false;
	// 大分類のみが指定されている場合
	   if (cate1 !== '---' && cate2 === '---' && cate3 === '---') {
	     if (item.tags1.some(t => t === cate1)) {
	         isHit = true;
	     }
	   }
	// 小分類のみが指定されている場合
	   if (cate1 === '---' && cate2 !== '---' && cate3 === '---') {
	     if (item.tags2.some(t => t === cate2)) {
	         isHit = true;
	     }
	   }
	// 大分類、小分類が指定されている場合
	   if (cate1 !== '---' && cate2 !== '---' && cate3 === '---') {
	     if (item.tags1.some(t => t === cate1) && item.tags2.some(t => t === cate2)) {
	         isHit = true;
	     }
	   }
	   
	   if (cate1 !== '---' && cate2 !== '---' && cate3 !== '---') {
	     if (item.tags1.some(t => t === cate1) && item.tag2.some(t => t === cate2) && item.tag3.some(t => t === cate3)) {
	         isHit = true;
	     }
	   }
	   
	   if (cate1 !== '---' && cate2 === '---' && cate3 !== '---') {
	     if (item.tag1.some(t => t === cate1) && item.tag3.some(t => t === cate3)) {
	         isHit = true;
	     }    
	   }
	   
	   if (cate1 === '---' && cate2 !== '---' && cate3 !== '---') {
	     if (item.tag2.some(t => t === cate2) && item.tag3.some(t => t === cate3)) {
	         isHit = true;
	     }    
	   }
	// 大分類、小分類が未指定の場合、必ずtrueを辺返却
	   if (cate1 === '---' && cate2 === '---' && cate3 === '---') {
	     isHit = true;
	   }
	// 見つかった場合はtrue, 見つからない場合はfalse
	return isHit; 
}