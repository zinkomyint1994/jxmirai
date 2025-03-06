document.addEventListener("DOMContentLoaded", function () {
	// Fake Data for Products
	const fakeProducts = {
		試作金型: [
			{
				img: "金型/試作型（（簡易金型）製品/試作型、インサート成形、材料：PC（透明）＋樹脂（PC+ABS）.jpg",
				name: "インサート成形 , PC（透明）＋樹脂（PC+ABS",
				type: "試作金型",
			},
			{
				img: "金型/試作型（（簡易金型）製品/試作型、インサート成形、材料：SUS+樹脂 (3).jpg",
				name: "インサート成形、材料：SUS+樹脂",
				type: "試作金型",
			},
			{
				img: "金型/試作型（（簡易金型）製品/試作型、インサート成形、材料：SUS+樹脂.jpg",
				name: "インサート成形、材料：SUS+樹脂",
				type: "試作金型",
			},
			{
				img: "金型/試作型（（簡易金型）製品/試作型、インサート成形、材料：真鍮ネジ＋PC（透明）＋樹脂（PC+ABS）.jpg",
				name: "インサート成形、材料：真鍮ネジ＋PC（透明）＋樹脂（PC+ABS）",
				type: "試作金型",
			},
			{
				img: "金型/試作型（（簡易金型）製品/試作型、インサート成形、自動車部品、材料：SUS+樹脂 (2).jpg",
				name: "インサート成形、自動車部品、材料：SUS+樹脂",
				type: "試作金型",
			},
			{
				img: "金型/試作型（（簡易金型）製品/試作型、インサート成形、自動車部品、材料：鉄+樹脂 (2).jpg",
				name: "インサート成形、自動車部品、材料：鉄+樹脂",
				type: "試作金型",
			},
			{
				img: "金型/試作型（（簡易金型）製品/試作型、インサート成形、自動車部品、材料：鉄+樹脂 (3).jpg",
				name: "インサート成形、自動車部品、材料：鉄+樹脂",
				type: "試作金型",
			},
			{
				img: "金型/試作型（（簡易金型）製品/試作型、インサート成形、自動車部品、材料：鉄+樹脂 (4).jpg",
				name: "インサート成形、自動車部品、材料：鉄+樹脂",
				type: "試作金型",
			},
			{
				img: "金型/試作型（（簡易金型）製品/試作型、インサート成形、自動車部品、材料：鉄+樹脂.jpg",
				name: "インサート成形、自動車部品、材料：鉄+樹脂",
				type: "試作金型",
			},
			{
				img: "金型/試作型（（簡易金型）製品/試作型、コンプレッション成形,材料：ゴム.jpg",
				name: "コンプレッション成形,材料：ゴム",
				type: "試作金型",
			},
			{
				img: "金型/試作型（（簡易金型）製品/試作型、コンプレッション成形、材料：ゴム.jpg",
				name: "コンプレッション成形,材料：ゴム",
				type: "試作金型",
			},
			{
				img: "金型/試作型（（簡易金型）製品/試作型、家電部品、射出成形、材料：樹脂.jpg",
				name: "家電部品、射出成形、材料：樹脂",
				type: "試作金型",
			},
			{
				img: "金型/試作型（（簡易金型）製品/試作型、射出成形、メガネ.jpg",
				name: "試作型、射出成形、メガネ",
				type: "試作金型",
			},
			{
				img: "金型/試作型（（簡易金型）製品/試作型、射出成形、材料：PC.jpg",
				name: "試作型、射出成形、材料：PC",
				type: "試作金型",
			},
			{
				img: "金型/試作型（（簡易金型）製品/試作型、射出成形、自動車部品、材料：PBT-GF15 (2).jpg",
				name: "試作型、射出成形、自動車部品、材料：PBT-GF15",
				type: "試作金型",
			},
			{
				img: "金型/試作型（（簡易金型）製品/試作型、射出成形、自動車部品、材料：PBT-GF15.jpg",
				name: "試作型、射出成形、自動車部品、材料：PBT-GF15",
				type: "試作金型",
			},
		],
		量産金型: [
			{
				img: "金型/量産型製品/PVC成形 (2).jpg",
				name: "PVC成形プロダクト",
				type: "量産金型",
			},
			{
				img: "金型/量産型製品/PVC成形.jpg",
				name: "PVC成形プロダクト",
				type: "量産金型",
			},
			{
				img: "金型/量産型製品/圧縮成形、材料：SMC.jpg",
				name: "圧縮成形、材料：SMC",
				type: "量産金型",
			},
			{
				img: "金型/量産型製品/量産型、2色製品、材料：ゴム+樹脂 (2).jpg",
				name: "2色製品、材料：ゴム+樹脂",
				type: "量産金型",
			},
			{
				img: "金型/量産型製品/量産型、2色製品、材料：ゴム+樹脂.jpg",
				name: "2色製品、材料：ゴム+樹脂",
				type: "量産金型",
			},
			{
				img: "金型/量産型製品/量産型、2色製品、自動車部品、材料：ゴム+樹脂 (3).jpg",
				name: "2色製品、自動車部品、材料：ゴム+樹脂",
				type: "量産金型",
			},
			{
				img: "金型/量産型製品/量産型、コンプレッション成形、材料：ゴム.jpg",
				name: "2色製品、自動車部品、材料：ゴム",
				type: "量産金型",
			},
			{
				img: "金型/量産型製品/量産型、ブロー成形 (2).jpg",
				name: "ブロー成形 プロダクト",
				type: "量産金型",
			},
			{
				img: "金型/量産型製品/量産型、ブロー成形.jpg",
				name: "ブロー成形 プロダクト",
				type: "量産金型",
			},
			{
				img: "金型/量産型製品/量産型、多点コールドランナー、モーターモータートラブ型.jpg",
				name: "多点コールドランナー、モーターモータートラブ型",
				type: "量産金型",
			},
			{
				img: "金型/量産型製品/量産型、家電部品、射出成形、材料：PP (3).jpg",
				name: "家電部品、射出成形、材料：PP",
				type: "量産金型",
			},
			{
				img: "金型/量産型製品/量産型、家電部品、射出成形、材料：PP.jpg",
				name: "家電部品、射出成形、材料：PP",
				type: "量産金型",
			},
			{
				img: "金型/量産型製品/量産型、家電部品、射出成形、材料：樹脂.jpg",
				name: "家電部品、射出成形、材料：樹脂",
				type: "量産金型",
			},
			{
				img: "金型/量産型製品/量産型、家電部品、射出成形、材料：樹脂（透明材）.jpg",
				name: "家電部品、射出成形、材料：樹脂（透明材）",
				type: "量産金型",
			},
			{
				img: "金型/量産型製品/量産型、射出成形、家電部品、材料：樹脂 (2).jpg",
				name: "射出成形、家電部品、材料：樹脂",
				type: "量産金型",
			},
			{
				img: "金型/量産型製品/量産型、射出成形、家電部品、材料：樹脂.jpg",
				name: "射出成形、家電部品、材料：樹脂",
				type: "量産金型",
			},
			{
				img: "金型/量産型製品/量産型、射出成形、材料：PSU (2).jpg",
				name: "射出成形、材料：PSU",
				type: "量産金型",
			},
			{
				img: "金型/量産型製品/量産型、射出成形、材料：PSU (3).jpg",
				name: "射出成形、材料：PSU",
				type: "量産金型",
			},
			{
				img: "金型/量産型製品/量産型、射出成形、材料：PSU.jpg",
				name: "射出成形、材料：PSU",
				type: "量産金型",
			},
			{
				img: "金型/量産型製品/量産型、射出成形、材料：樹脂（透明材）+シポ処理.jpg",
				name: "射出成形、材料：樹脂（透明材）+シポ処理",
				type: "量産金型",
			},
			{
				img: "金型/量産型製品/量産型、射出成形、自動車部品、材料：樹脂 (2).jpg",
				name: "射出成形、自動車部品、材料：樹脂",
				type: "量産金型",
			},
			{
				img: "金型/量産型製品/量産型、射出成形、自動車部品、材料：樹脂 (3).jpg",
				name: "射出成形、自動車部品、材料：樹脂",
				type: "量産金型",
			},
			{
				img: "金型/量産型製品/量産型、射出成形、自動車部品、材料：樹脂.jpg",
				name: "射出成形、自動車部品、材料：樹脂",
				type: "量産金型",
			},
		],
		光造形: [
			{
				img: "３Dプリンター/光造形/Image_20241021133212.jpg",
				name: "光造形プロダクト 1",
				type: "光造形",
			},
			{
				img: "３Dプリンター/光造形/Image_20241128123916.jpg",
				name: "光造形プロダクト 2",
				type: "光造形",
			},
			{
				img: "３Dプリンター/光造形/Image_20241205175718.jpg",
				name: "光造形プロダクト 3",
				type: "光造形",
			},
			{
				img: "３Dプリンター/光造形/Image_20241205175912.jpg",
				name: "光造形プロダクト 4",
				type: "光造形",
			},
		],
		FDM造形: [
			{
				img: "３Dプリンター/FDM造形/Image_20241121170444.jpg",
				name: "FDM造形プロダクト 1",
				type: "FDM造形",
			},
			{
				img: "３Dプリンター/FDM造形/Image_20241121170500.jpg",
				name: "FDM造形プロダクト 1",
				type: "FDM造形",
			},
			{
				img: "３Dプリンター/FDM造形/Image_20241205175812.jpg",
				name: "FDM造形プロダクト 1",
				type: "FDM造形",
			},
		],
		DLP造形: [
			{
				img: "３Dプリンター/DLP造形/Image_20241120174029.png",
				name: "DLP造形プロダクト 1",
				type: "DLP造形",
			},
			{
				img: "３Dプリンター/DLP造形/Image_20250106121831.png",
				name: "DLP造形プロダクト 2",
				type: "DLP造形",
			},
		],
		粉末造形: [
			{
				img: "３Dプリンター/粉末造形/Image_20241205175903.jpg",
				name: "粉末造形プロダクト 1",
				type: "粉末造形",
			},
			{
				img: "３Dプリンター/粉末造形/Image_20241205175903.jpg",
				name: "粉末造形プロダクト 2",
				type: "粉末造形",
			},
		],
		金属造形: [
			{
				img: "３Dプリンター/金属造形/Image_20241129152709.jpg",
				name: "金属造形プロダクト 1",
				type: "金属造形",
			},
			{
				img: "３Dプリンター/金属造形/Image_20241129152857.jpg",
				name: "金属造形プロダクト 2",
				type: "金属造形",
			},
			{
				img: "３Dプリンター/金属造形/Image_20250109114904.jpg",
				name: "金属造形プロダクト 2",
				type: "金属造形",
			},
			{
				img: "３Dプリンター/金属造形/金属３D写真/Image_20240909142936.jpg",
				name: "金属３D写真プロダクト 2",
				type: "金属造形",
			},
			{
				img: "３Dプリンター/金属造形/金属３D写真/Image_20240909143048.jpg",
				name: "金属３D写真プロダクト 2",
				type: "金属造形",
			},
			{
				img: "３Dプリンター/金属造形/金属３D写真/Image_20240909143059.jpg",
				name: "金属３D写真プロダクト 2",
				type: "金属造形",
			},
			{
				img: "３Dプリンター/金属造形/金属３D写真/Image_20240909143107.jpg",
				name: "金属３D写真プロダクト 2",
				type: "金属造形",
			},
		],
	};

	// Function to Update Products
	function updateProducts(category) {
		const productContainer = document.querySelector(".listing");
		productContainer.innerHTML = ""; // Clear existing products
		const imageURL = document
			.getElementById("product-container")
			.getAttribute("data-image-url");

		const products = fakeProducts[category] || [];

		if (products.length === 0) {
			productContainer.innerHTML = `<p class="not_found">No products found</p>`;
			return;
		}

		products.forEach((product) => {
			const productHTML = `
        <div class="list_item">
          <img src="${imageURL}/assets/images/products/${product.img}" alt="">
          <p>${product.name}</p>
          <p class="status">${product.type}</p>
        </div>
      `;
			productContainer.innerHTML += productHTML;
		});
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
