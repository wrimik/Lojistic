/**
 * Created by Mike on 11/5/15.
 */
Nav = new Vue({
    el: '#headernav',
    data: {
        scrollTopAfter: 84, // triggers scrolltop style nav after the window scrolls past this point
        scrollNavTriggerWidth: 997, // uses scrollnav when the width is tablet sized
        sideNavMax: 997, // up to this point, the hamburger menu will reveal the side navigation menu (nav-sidenav.js)
        headerState: 'fullnav', // options: [fullnav, scrollnav]
        menuMode: 'top', // options: [top, side]
        menuState: 'closed' //options [closed, open]
    },
    created: function () {
        this.setListeners();
    },
    methods: {
        /**
         * gets the width of the window
         * @returns {Number}
         */
        viewWidth: function () {
            return window.innerWidth;
        },
        /**
         * gets the top scroll position of the window
         * @returns {Number}
         */
        scrollTop: function () {
            return document.body.scrollTop + document.documentElement.scrollTop;
        },
        /**
         * binds window events to Nav methods
         */
        setListeners: function () {
            window.onscroll = function () {
                Nav.refresh();
            };
            window.onresize = function () {
                Nav.refresh();
            };
            setTimeout(function () {
                Nav.refresh();
            }, 300);

            toFixIE(resetSvg);
        },
        /**
         * flips whatever the current state of the menu is
         */
        toggleMenu: function () {
            this.menuState == 'open' ? this.setMenuState('closed') : this.setMenuState('open');
        },
        /**
         * applies the default / largest state of the nav
         */
        fullNav: function () {
            if (this.$data.headerState != 'fullnav') {
                this.setMenuState('closed');
            }
            this.$data.headerState = 'fullnav';
        },
        /**
         *
         * @param state
         */
        setMenuState: function (state) {
            this.$data.menuState = state; //close the menu just for cleanup
            Sidenav.state = state;
        },
        /**
         * applies scrollnav state
         */
        scrollNav: function () {
            if (this.$data.headerState != 'scrollnav') {
                //only close the sub menu when the type of header has changed
                this.setMenuState('closed');
            }
            this.$data.headerState = 'scrollnav';
        },
        /**
         * decides which nav to show when the window changes
         */
        refresh: function () {
            if (this.scrollTop() < this.scrollTopAfter) {
                // up top
                if (this.scrollNavTriggerWidth <= this.viewWidth()) {
                    //full size
                    this.fullNav();
                } else {
                    //tablet size
                    this.scrollNav();
                }
            } else {
                //scrolled
                this.scrollNav();
            }
        }
    }
});