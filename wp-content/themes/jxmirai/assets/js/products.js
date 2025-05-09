document.addEventListener("DOMContentLoaded", function () {
	// Fake Data for Products
	const fakeProducts = {
		試作金型: [
			{
				img: "金型/試作型（（簡易金型）製品/試作型、射出成形、材料：PC.jpg",
				name: "試作型、射出成形、材料：PC",
				type: "試作金型",
				title: "金型",
			},

		],
		量産金型: [
		
			{
				img: "金型/量産型製品/量産型、2色製品、自動車部品、材料：ゴム+樹脂 (3).jpg",
				name: "2色製品、自動車部品、材料：ゴム+樹脂",
				type: "量産金型",
				title: "金型",
			},
			{
				img: "金型/量産型製品/量産型、コンプレッション成形、材料：ゴム.jpg",
				name: "2色製品、自動車部品、材料：ゴム",
				type: "量産金型",
				title: "金型",
			},
			{
				img: "金型/量産型製品/量産型、ブロー成形 (2).jpg",
				name: "ブロー成形 プロダクト",
				type: "量産金型",
				title: "金型",
			},
		],
		光造形: [
			{
				img: "３Dプリンター/光造形/Image_20241021133212.jpg",
				name: "光造形プロダクト 1",
				type: "光造形",
				title: "3Dプリンター",
			},
			{
				img: "３Dプリンター/光造形/Image_20241128123916.jpg",
				name: "光造形プロダクト 2",
				type: "光造形",
				title: "3Dプリンター",
			},
			{
				img: "３Dプリンター/光造形/Image_20241205175718.jpg",
				name: "光造形プロダクト 3",
				type: "光造形",
				title: "3Dプリンター",
			},
			{
				img: "３Dプリンター/光造形/Image_20241205175912.jpg",
				name: "光造形プロダクト 4",
				type: "光造形",
				title: "3Dプリンター",
			},
		],
		FDM造形: [
			{
				img: "３Dプリンター/FDM造形/Image_20241121170444.jpg",
				name: "FDM造形プロダクト 1",
				type: "FDM造形",
				title: "3Dプリンター",
			},
			{
				img: "３Dプリンター/FDM造形/Image_20241121170500.jpg",
				name: "FDM造形プロダクト 1",
				type: "FDM造形",
				title: "3Dプリンター",
			},
			{
				img: "３Dプリンター/FDM造形/Image_20241205175812.jpg",
				name: "FDM造形プロダクト 1",
				type: "FDM造形",
				title: "3Dプリンター",
			},
		],
		DLP造形: [
			{
				img: "３Dプリンター/DLP造形/Image_20241120174029.png",
				name: "DLP造形プロダクト 1",
				type: "DLP造形",
				title: "3Dプリンター",
			},
			{
				img: "３Dプリンター/DLP造形/Image_20250106121831.png",
				name: "DLP造形プロダクト 2",
				type: "DLP造形",
				title: "3Dプリンター",
			},
		],
		粉末造形: [
			{
				img: "３Dプリンター/粉末造形/Image_20241205175903.jpg",
				name: "粉末造形プロダクト 1",
				type: "粉末造形",
				title: "3Dプリンター",
			},
			{
				img: "３Dプリンター/粉末造形/Image_20250106123319.jpg",
				name: "粉末造形プロダクト 2",
				type: "粉末造形",
				title: "3Dプリンター",
			},
		],
		金属造形: [
			{
				img: "３Dプリンター/金属造形/Image_20241129152709.jpg",
				name: "金属造形プロダクト 1",
				type: "金属造形",
				title: "3Dプリンター",
			},
			{
				img: "３Dプリンター/金属造形/Image_20241129152857.jpg",
				name: "金属造形プロダクト 2",
				type: "金属造形",
				title: "3Dプリンター",
			},
			{
				img: "３Dプリンター/金属造形/Image_20250109114904.jpg",
				name: "金属造形プロダクト 2",
				type: "金属造形",
				title: "3Dプリンター",
			},
			{
				img: "３Dプリンター/金属造形/金属３D写真/Image_20240909142936.jpg",
				name: "金属３D写真プロダクト 2",
				type: "金属造形",
				title: "3Dプリンター",
			},
			{
				img: "３Dプリンター/金属造形/金属３D写真/Image_20240909143048.jpg",
				name: "金属３D写真プロダクト 2",
				type: "金属造形",
				title: "3Dプリンター",
			},
			{
				img: "３Dプリンター/金属造形/金属３D写真/Image_20240909143059.jpg",
				name: "金属３D写真プロダクト 2",
				type: "金属造形",
				title: "3Dプリンター",
			},
			{
				img: "３Dプリンター/金属造形/金属３D写真/Image_20240909143107.jpg",
				name: "金属３D写真プロダクト 2",
				type: "金属造形",
				title: "3Dプリンター",
			},
		],
		切削:
		[
				{
					img: "metal/金属切削品/金属切削、材料：アルミ、ヒートシンク.jpg",
					name: "金属切削、材料：アルミ、ヒートシンク",
					type: "金属切削、材料：アルミ、ヒートシンク",
					title :"樹脂",
				},
				{
					img: "metal/金属切削品/金属切削、材料：アルミ.jpg",
					name: "金属切削、材料：アルミ",
					type: "金属切削、材料：アルミ",
					title :"樹脂",
				},
				{
					img: "metal/金属切削品/金属切削、材料：アルミ+メキ.jpg",
					name: "金属切削、材料：アルミ+メキ",
					type: "金属切削、材料：アルミ+メキ",
					title :"樹脂",
				},
				{
					img: "metal/金属切削品/金属切削、材料：アルミ+塗装.jpg",
					name: "金属切削、材料：アルミ+塗装",
					type: "金属切削、材料：アルミ+塗装",
					title :"樹脂",
				},
				{
					img: "metal/金属切削品/金属切削、材料：真鍮.jpg",
					name: "金属切削、材料：真鍮",
					type: "金属切削、材料：真鍮",
					title :"樹脂",
				},
				{
					img: "metal/金属切削品/金属切削品、材料：鉄+塗装 (2).jpg",
					name: "金属切削品、材料：鉄+塗装",
					type: "金属切削品、材料：鉄+塗装",
					title :"樹脂",
				},
				{
					img: "metal/金属切削品/金属切削品、材料：鉄+塗装.jpg",
					name: "金属切削品、材料：鉄+塗装",
					type: "金属切削品、材料：鉄+塗装",
					title :"樹脂",
				},
			],
		板金: [
				{
					img: "metal/金属板金品/1.jpg",
					name: "板金、材料：銅(C1012),自動車部品 、t＝6mmまで曲げ問題ありません。",
					type: "板金、材料：銅(C1012),自動車部品 、t＝6mmまで曲げ問題ありません。",
					title :"金属",
				},
				{
					img: "metal/金属板金品/2.jpg",
					name: "板金、材料：銅(C1012),自動車部品 (2)",
					type: "板金、材料：銅(C1012),自動車部品 (2)",
					title :"金属",
				},
				{
					img: "metal/金属板金品/3.jpg",
					name: "板金、材料：銅(C1012),自動車部品 (3)",
					type: "板金、材料：銅(C1012),自動車部品 (3)",
					title :"金属",
				},
				{
					img: "metal/金属板金品/4.jpg",
					name: "板金、材料：銅(C1012),自動車部品",
					type: "板金、材料：銅(C1012),自動車部品",
					title :"金属",
				},
		],
		ダイキャスト: [
			{
				img: "metal/ダイキャスト製品/ダイキャスト、材料：アルミ.jpg",
				name: "ダイキャスト、材料：アルミ",
				type: "ダイキャスト、材料：アルミ",
				title :"金属",
			},
			{
				img: "metal/ダイキャスト製品/ダイキャスト、材料：アルミ+塗装.jpg",
				name: "ダイキャスト、材料：アルミ+塗装",
				type: "ダイキャスト、材料：アルミ+塗装",
				title :"金属",
			},
			{
				img: "metal/ダイキャスト製品/ダイキャスト、材料：アルミ＋追加加工 (2).jpg",
				name: "ダイキャスト、材料：アルミ＋追加加工 (2)",
				type: "ダイキャスト、材料：アルミ＋追加加工 (2)",
				title :"金属",
			},
			{
				img: "metal/ダイキャスト製品/ダイキャスト、材料：アルミ＋追加加工.jpg",
				name: "ダイキャスト、材料：アルミ＋追加加工",
				type: "ダイキャスト、材料：アルミ＋追加加工",
				title :"金属",
			},
		],
		金属: [
			
			{
				img: "metal/金属切削品/金属切削、材料：アルミ、ヒートシンク.jpg",
				name: "金属切削、材料：アルミ、ヒートシンク",
				type: "金属切削、材料：アルミ、ヒートシンク",
				title :"金属",
			},
			{
				img: "metal/金属切削品/金属切削、材料：アルミ.jpg",
				name: "金属切削、材料：アルミ",
				type: "金属切削、材料：アルミ",
				title :"金属",
			},
			{
				img: "metal/金属切削品/金属切削、材料：アルミ+メキ.jpg",
				name: "金属切削、材料：アルミ+メキ",
				type: "金属切削、材料：アルミ+メキ",
				title :"金属",
			},
			{
				img: "metal/金属切削品/金属切削、材料：アルミ+塗装.jpg",
				name: "金属切削、材料：アルミ+塗装",
				type: "金属切削、材料：アルミ+塗装",
				title :"金属",
			},
			{
				img: "metal/金属切削品/金属切削、材料：真鍮.jpg",
				name: "金属切削、材料：真鍮",
				type: "金属切削、材料：真鍮",
				title :"金属",
			},
			{
				img: "metal/金属切削品/金属切削品、材料：鉄+塗装 (2).jpg",
				name: "金属切削品、材料：鉄+塗装",
				type: "金属切削品、材料：鉄+塗装",
				title :"金属",
			},
			{
				img: "metal/金属切削品/金属切削品、材料：鉄+塗装.jpg",
				name: "金属切削品、材料：鉄+塗装",
				type: "金属切削品、材料：鉄+塗装",
				title :"金属",
			},
		],
		
		// 基板ボックス設計開発: [
		// 	{
		// 		img: "other/基板ボックス設計開発品/基板ボックス設計開発品 (2).jpg",
		// 		name: "基板ボックス設計開発品 (2)",
		// 		type: "基板ボックス設計開発品 (2)",
		// 	},
		// 	{
		// 		img: "other/基板ボックス設計開発品/基板ボックス設計開発品.jpg",
		// 		name: "基板ボックス設計開発品",
		// 		type: "基板ボックス設計開発品",
		// 	},
		// ],
		// アクリルスタンド: [
		// 	{
		// 		img: "other/アクリルスタンド/アクリルスタンド.jpg",
		// 		name: "アクリルスタンド",
		// 		type: "アクリルスタンド",
		// 	},
		// ],
		// アクリルキーホルダー: [
		// 	{
		// 		img: "other/アクリルスタンド/アクリルキーホルダー.jpg",
		// 		name: "アクリルキーホルダー",
		// 		type: "アクリルキーホルダー",
		// 	},
		// ],
		// フィギュア付きストラップ: [
		// 	{
		// 		img: "other/フィギュア付きストラップ品/フィギュア付きストラップ品 (2).jpg",
		// 		name: "フィギュア付きストラップ品 (2)",
		// 		type: "フィギュア付きストラップ品 (2)",
		// 	},
		// 	{
		// 		img: "other/フィギュア付きストラップ品/フィギュア付きストラップ品 (3).jpg",
		// 		name: "フィギュア付きストラップ品 (3)",
		// 		type: "フィギュア付きストラップ品 (3)",
		// 	},
		// 	{
		// 		img: "other/フィギュア付きストラップ品/フィギュア付きストラップ品 (4).jpg",
		// 		name: "フィギュア付きストラップ品 (4)",
		// 		type: "フィギュア付きストラップ品 (4)",
		// 	},
		// 	{
		// 		img: "other/フィギュア付きストラップ品/フィギュア付きストラップ品.jpg",
		// 		name: "フィギュア付きストラップ品",
		// 		type: "フィギュア付きストラップ品",
		// 	},
		// ],
		// 樹脂エポキシサメナイトライト: [
		// 	{
		// 		img: "other/樹脂/樹脂 エポキシ サメ ナイトライト 品 (2).jpg",
		// 		name: "樹脂 エポキシ サメ ナイトライト 品 (2)",
		// 		type: "樹脂 エポキシ サメ ナイトライト 品 (2)",
		// 	},
		// 	{
		// 		img: "other/樹脂/樹脂 エポキシ サメ ナイトライト 品 (3).jpg",
		// 		name: "樹脂 エポキシ サメ ナイトライト 品 (3)",
		// 		type: "樹脂 エポキシ サメ ナイトライト 品 (3)",
		// 	},
		// 	{
		// 		img: "other/樹脂/樹脂 エポキシ サメ ナイトライト 品 (4).jpg",
		// 		name: "樹脂 エポキシ サメ ナイトライト 品 (4)",
		// 		type: "樹脂 エポキシ サメ ナイトライト 品 (4)",
		// 	},
		// 	{
		// 		img: "other/樹脂/樹脂 エポキシ サメ ナイトライト 品 (5).jpg",
		// 		name: "樹脂 エポキシ サメ ナイトライト 品 (5)",
		// 		type: "樹脂 エポキシ サメ ナイトライト 品 (5)",
		// 	},
		// 	{
		// 		img: "other/樹脂/樹脂 エポキシ サメ ナイトライト 品.jpg",
		// 		name: "樹脂 エポキシ サメ ナイトライト 品",
		// 		type: "樹脂 エポキシ サメ ナイトライト 品",
		// 	},
		// ],
		// 弊社の開発品: [
		// 	{
		// 		img: "other/弊社の開発品/Image_20250221185905.jpg",
		// 		name: "弊社の開発品",
		// 		type: "弊社の開発品",
		// 	},
		// 	{
		// 		img: "other/弊社の開発品/Image_20250221185957.jpg",
		// 		name: "弊社の開発品",
		// 		type: "弊社の開発品",
		// 	},
		// 	{
		// 		img: "other/弊社の開発品/ウォーターフィルター.jpg",
		// 		name: "ウォーターフィルター",
		// 		type: "ウォーターフィルター",
		// 	},
		// 	{
		// 		img: "other/弊社の開発品/水器-スポーツボトル.jpg",
		// 		name: "水器-スポーツボトル",
		// 		type: "水器-スポーツボトル",
		// 	},
		// 	{
		// 		img: "other/弊社の開発品/自動車樹脂製品＋アクリルカーバ.jpg",
		// 		name: "自動車樹脂製品＋アクリルカーバ",
		// 		type: "自動車樹脂製品＋アクリルカーバ",
		// 	},
		// ],
	};

	// Function to Update Products 
	function updateProducts(category) {
		const container = document.getElementById("product-container");
		container.innerHTML = ""; // Clear any existing content
		
		const imageURL = container.getAttribute("data-image-url");
		const allProducts = Object.values(fakeProducts).flat();
		
		// Group by title
		const grouped = {};
		allProducts.forEach(product => {
		  const title = product.title;
		  if (!grouped[title]) grouped[title] = [];
		  grouped[title].push(product);
		});

  for (const [title, products] of Object.entries(grouped)) {
    // const titleElem = document.createElement("div");
    // titleElem.className = "subtitle-wrapper";
    // titleElem.textContent = title;
	const subtitleWrapper = document.createElement("div");
	subtitleWrapper.className = "subtitle-wrapper";
	subtitleWrapper.innerHTML = `
	  <div class="sub-blue"></div>
	  <div class="subtitle-txt" style="color: #333;width:200px;text-align:center;width:200px;background:#00000014;padding:0px 0px 0px 0px">${title}</div>
	`;
    container.appendChild(subtitleWrapper);

    const groupSection = document.createElement("div");
    groupSection.className = "products_wrapper";

    products.forEach(product => {
      const card = document.createElement("div");

		card.innerHTML = `
		<div class="inner_container">
		  <img src="${imageURL}/assets/images/products/${product.img}" alt="" class="tags-img">
				<p>${product.name}</p>
				<p class="status">${product.type}</p>
		  </div>
		  <div class="spreator"></div>
	
      `;
      groupSection.appendChild(card);
    });

    container.appendChild(groupSection);
  }

		// const productContainer = document.querySelector(".listing");
		// const test = document.querySelector(".title_list");
		// productContainer.innerHTML = ""; // Clear existing products
		// const imageURL = document
		// 	.getElementById("product-container")
		// 	.getAttribute("data-image-url");

		// //const products = fakeProducts[category] || [];
		// // const products = Object.values(fakeProducts).flat();

		// if (products.length === 0) {
		// 	productContainer.innerHTML = `<p class="not_found">No products found</p>`;
		// 	return;
		// }
		// if (products.length > 0) {
		// 	const titleHTML = `
		// 	<div class="subtitle-wrapper" >
		// 	<div class="sub-blue"></div>
		// 	<div class="subtitle-txt">${products[0].title}</div>
			  
		// </div>
		// 	`;
		// 	test.innerHTML = titleHTML;
		  
		// 	// Now render all the products
		// 	products.forEach((product) => {
		// 	  const productHTML = `
		// 		<div class="list_item">
		// 		  <img src="${imageURL}/assets/images/products/${product.img}" alt="">
		// 		  <p>${product.name}</p>
		// 		  <p class="status">${product.type}</p>
		// 		</div>
		// 	  `;
		// 	  productContainer.innerHTML += productHTML;
		// 	});
		// }
		

	// 	products.forEach((product) => {
	// 	const productHTML = `
    //     <div class="list_item">
    //       <img src="${imageURL}/assets/images/products/${product.img}" alt="">
    //       <p>${product.name}</p>
    //       <p class="status">${product.type}</p>
    //     </div>
    //   `;
	// 		productContainer.innerHTML += productHTML;
	// 	});
	}

	// Get all categories
	document.querySelectorAll(".item").forEach((item) => {
    
		item.addEventListener("click", function () {
			const categoryItems = document.querySelectorAll(".item");
			const category = item.textContent.trim(); // Get clicked category
			// Remove active class from all items
			categoryItems.forEach((i) => i.classList.remove("active"));

			// Add active class ONLY if products were updated
			if (fakeProducts[category]) {
				this.classList.add("active");
			}
			updateProducts(category);
		});
	});

	// Load Default Category (All Products)
	updateProducts("試作金型");
});
