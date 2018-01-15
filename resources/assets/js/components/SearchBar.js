import React, { Component } from 'react';

class SearchBar extends Component {
    constructor() {
        super()
    }

    render() {

        const { getArticleSearchInput } = this.props;
        
        return(
             <span className="search-wrap">
                <input className="search" type="text" placeholder="Search articles.." onChange={ (e) => getArticleSearchInput(e.target.value)} />
                <span className="icon-search"></span>
            </span>
                              
        )
    }
}

export default SearchBar;