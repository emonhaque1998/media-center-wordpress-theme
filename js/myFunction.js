// Nav dropdown menu
const liDip = document.querySelectorAll('#selection > li');
for(let result of liDip){
	for(let result1 of result.children){
		if(result1.localName === 'ul'){
			result1.setAttribute('role','menu');
			result1.parentElement.classList.add('dropdown');
			

			
			for(let result2 of result1.parentElement.children){
				if(result2.localName === 'a'){
					result2.classList.add('dropdown-toggle');
					result2.setAttribute('data-toggle', 'dropdown');
				}
			}
		}
	}
}


// pagination

const ulPagination = document.querySelector('ul.pagination');
for(let result of ulPagination.children){
	if(result.localName == 'nav'){
		for(let result2 of result.children){
			if(result2.localName == 'div'){
				for(let result3 of result2.children){
					if(result3.localName == 'ul'){
						result3.classList.add('pagination');
						result3.classList.add('blog-pagination');
					}
				}
			}
		}
	}
}



// 
const tagDiv = document.querySelector('#developer_tag_widget');
const myArrayTag = [12,20,10,14,16];



for(let result of tagDiv.children){
	if(result.localName == 'a'){
		const randomNumber = Math.floor(Math.random() * 6);
		result.style.fontSize = `${myArrayTag[randomNumber]}px`;		
	}
}