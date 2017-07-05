import React, { Component } from 'react';
import ReactDOM from 'react-dom';

// import categories from '../data/categories'
// import sources from '../data/sources'

import Category from './Category';
import NewsSource from './NewsSource';
import TabList from './TabList';

import axios from 'axios';


class Categories extends Component {
  constructor() {
    super()

    this.state = {
      sources: window.Laravel.newsSources.sources,
      categories: [],
      selectedCategories: []
    }
  }

  componentDidMount = () => {
    axios.get('/api/categories')
    .then(response => {
      // const categories = {...this.state.categories};
      this.setState({categories: response.data.categories});
    })
    .catch( error => {
      console.log(error);
    });
  }


  selectCategory = (category) => {

    const selectedCategories = [...this.state.selectedCategories];
    const categories = [...this.state.categories];

  
    this.setState({
      categories: categories.map(category => {
        category.selected = category.name === category
        return category
      }),
      sources: category === 'general' ? window.Laravel.newsSources.sources : window.Laravel.newsSources.sources.filter(source => (source.category === category)),
    })

    console.log(category.name);
  }


  handleInputChange = (e) => {
      const target = e.target;
      const value = target.type === 'checkbox' ? target.checked : target.value;
      const name = target.name;

      let selectedCategories = this.state.selectedCategories;

      if (e.target.checked) {
        selectedCategories.push(e.target.name)
      } else {
        const index = selectedCategories.indexOf(e.target.name)
        selectedCategories.splice(index, 1)
      }
      console.log(selectedCategories);
  }


  render() {

    const { sources, categories, selectedCategories, checked } = this.state;

    return(

        

        <div>

        <TabList categories={categories} selectCategory={this.selectCategory} handleInputChange={this.handleInputChange} />

          { 
            sources.map((source, i) => (<NewsSource key={"source" + i} source={source} /> )) 
          }
          
        </div>
      )
  }
}

export default Categories