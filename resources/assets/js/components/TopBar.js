import React, { Component } from 'react';

class TopBar extends Component {
    constructor() {
        super()
    }

    render() {
        return(
            <div className="top-bar">
                <div className="row">
                    <div className="top-bar-left">
                        <ul className="menu">
                            <li className="menu-text"><h1>Newscape</h1></li>
                            <li className="menu-text strapline"><small>Personalise your newsfeed.</small></li>
                        </ul>
                    </div>
                    <div className="top-bar-right">
                        <ul className="menu">
                          <li className="menu-text"><a href={this.props.user ? this.props.logoutPage : this.props.loginPage}>{this.props.user ? "Log out" : "Log in"}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        )
    }
}

export default TopBar;