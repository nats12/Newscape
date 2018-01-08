import React, { Component } from 'react';

class SearchBar extends Component {
    constructor() {
        super()
    }

    render() {

        const { getArticleSearchInput } = this.props;
        
        return(
            <div className="search-bar">
                <input className="search" type="text" onChange={ (e) => getArticleSearchInput(e.target.value)} />
            </div>
                              
        )
    }
}

export default SearchBar;