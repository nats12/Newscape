import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import axios from 'axios';

class Categories extends Component {
  constructor() {
    super()
    this.getCategories = this.getCategories.bind(this);
    this.state = {
      categories: []
    }

  }

  getCategories() {
    axios.get('/api/categories')
      .then(response => {
        console.log(this.state);
        // const categories = {...this.state.categories};
        this.setState({categories: response.data.categories});
      })
      .catch( error => {
        console.log(error);
      });
  }

  render() {
    return(
        <div>
          <button onClick={this.getCategories}>Get Categories</button>

          {this.state.categories.map((category, index) => {
            return <label key={index}><input type="checkbox"/>{category.name}</label>
          })
          }
          
        </div>
      )
  }
}

export default Categories