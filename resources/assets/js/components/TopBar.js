import React, { Component } from 'react';
import SearchBar from './SearchBar';

class TopBar extends Component {
    constructor() {
        super()
    }

    render() {

        const { getArticleSearchInput } = this.props;
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
<<<<<<< HEAD
                          <li className="menu-text loginlogout"><a href={this.props.user ? this.props.logoutPage : this.props.loginPage}>{this.props.user ? "Log out" : "Log in"}</a></li>
                          <li className="menu-text search-bar"><SearchBar getArticleSearchInput={getArticleSearchInput} /></li>
=======
                          <li className="menu-text"><a href={this.props.user ? this.props.logoutPage : this.props.loginPage}>{this.props.user ? "Log out" : "Log in"}</a></li>
>>>>>>> master
                        </ul>
                    </div>

                </div>
            </div>
        )
    }
}

export default TopBar;