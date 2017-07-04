import React, { Component } from 'react';
import ReactDOM from 'react-dom';


class Category extends Component {
  constructor() {
    super()

  }

  render() {

    return (
      <label>
        <input 
        className="category-checkbox"
        data-id={this.props.category.id} 
        name={this.props.category.name}
        onChange={this.props.selectCategory}
        type="checkbox"/>
        {this.props.category.name}
      </label>
    )

  }
}

export default Category