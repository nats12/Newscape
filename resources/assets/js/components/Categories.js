import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import Category from './Category';

class Categories extends Component {
  constructor() {
    super()
  }

  render() {

    const { getCategories, saveCategories, selectCategory, categories } = this.props;

    return(
        <div>
          <button className="button small" onClick={getCategories}>Get Categories</button>

          <button className="button small" onClick={saveCategories} style={{display:"block"}}>Save Categories</button>

          <div className="row">
            {
              categories.map((category, index) => { 
                return <Category 
                key={index} 
                category={category} 
                selectCategory={selectCategory} 
                />})
            }
          </div>
          
        </div>
      )
  }
}

export default Categories