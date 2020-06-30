class Banner {
	constructor(){
		this.bannerDiv = document.querySelector('#banner_imgage');
		this.bannerCaptionDiv = document.querySelector('#banner_title');
		this.onOf = true;
		this.event();
		console.log(this.onOf)
	}

	event(){
		//class not access this keyword with function to function {Reminder}
		this.bannerDiv.addEventListener('mouseenter', this.showFunc.bind(this));
		this.bannerDiv.addEventListener('mouseleave', this.hideFunc.bind(this));	
	}
	showFunc(){
		if(this.onOf){
			this.bannerCaptionDiv.style.display = 'block';
			//class not access this keyword with function to function {Reminder}
			this.bannerCaptionDiv.addEventListener('mouseenter', this.bannerTextDivEffect.bind(this));
			this.bannerCaptionDiv.addEventListener('mouseleave', this.hideFunc.bind(this));
			this.onOf = false;
		}
	}
	bannerTextDivEffect(){
		this.bannerCaptionDiv.style.display = 'block';
		this.onOf = false;  
	}
	hideFunc(){
		if(!this.onOf){
			this.bannerCaptionDiv.style.display = 'none';
			this.onOf = true;
		}
	}
}


export default Banner;