class MenuHamburger {
    constructor() {
        this.hamburgerBtn = document.querySelector('.header__mobile-menu');
        this.mainMenu = document.querySelector('.list__item');
        this.subMenuTrainingsBtn = document.querySelector('.collapse-menu')
        this.subMenuTrainings = document.querySelector('.list__collapse')
        this.mainMenuContentBasedHeight = this.mainMenu.scrollHeight;
        this.subMenuTrainingsContentBasedHeight = this.subMenuTrainings.scrollHeight;
        this.events();
    }



    events() {
        this.mainMenu.style.height = "0px";
        this.hamburgerBtn.addEventListener('click', () => this.collapseMenu())
        this.subMenuTrainingsBtn.addEventListener('click', () => this.collapseSubMenuTrainings())
    }


    collapseMenu() {


        this.mainMenu.classList.toggle('list__item--is-visible')
        this.hamburgerBtn.classList.toggle('rotate');

        if (this.mainMenu.classList.contains('list__item--is-visible')) {

            this.mainMenu.style.height = this.mainMenuContentBasedHeight + "px";
        } else {
            this.mainMenu.style.height = "0px";
            this.subMenuTrainings.classList.remove('list__collapse--collapsed')
        }

    }

    collapseSubMenuTrainings() {

        let mainMenuHeight = parseInt(this.mainMenu.style.height);
        this.subMenuTrainings.classList.toggle('list__collapse--collapsed')

        if (this.subMenuTrainings.classList.contains('list__collapse--collapsed')) {
            this.subMenuTrainings.style.height = this.subMenuTrainingsContentBasedHeight
            this.mainMenu.style.height = mainMenuHeight + this.subMenuTrainingsContentBasedHeight
        } else {
            this.mainMenu.style.height = mainMenuHeight - this.subMenuTrainingsContentBasedHeight
        }




    }
}


export default MenuHamburger