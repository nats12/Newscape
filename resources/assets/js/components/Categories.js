import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import Category from './Category';

import axios from 'axios';

class Categories extends Component {
  constructor() {
    super()
 
    this.state = {
      categories: [],
      selectedCategories: [],
    }
  }

  selectCategory = (e) => {
    const checkboxes = document.querySelectorAll('.category-checkbox');
    const checkboxArray = [].slice.call(checkboxes);
    let selectedArray = [];
    checkboxArray.map(checkbox => {
      if(checkbox.checked && (selectedArray.indexOf(checkbox.getAttribute('data-id')) === -1)) {
        selectedArray.push(checkbox.getAttribute('data-id'));
      }
      else  {
        selectedArray.splice(checkbox.getAttribute('data-id'),1);
      }
    });
    console.log(selectedArray);
    this.setState({selectedCategories: selectedArray});
  }

  getCategories = () => {
    axios.get('/api/categories')
      .then(response => {
        console.log(this.state);
        // const categories = {...this.state.categories};
        this.setState({categories: response.data.categories});
      })
      .catch( error => {
        console.log(error);
      });

      console.log('clicked');
  }

  saveCategories = () => {
    axios.post('/api/category', {
        categories: this.state.selectedCategories
      })
      .then(response => {
        console.log(response);
      })
      .catch(error => {
        console.log(error);
      });
  }

  render() {
    return(
        <div>
          <button className="button small" onClick={this.getCategories}>Get Categories</button>

          {
            this.state.categories.map((category, index) => {return <Category key={category.id} dataID={category.id} category={category} selectCategory={this.selectCategory} />})
          }

          <button className="button small" onClick={this.saveCategories} style={{display:"block"}}>Save</button>
          
        </div>
      )
  }
}

export default Categories