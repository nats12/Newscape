import React, { Component } from 'react';
import ReactDOM from 'react-dom';


class Category extends Component {
  constructor() {
    super()

  }

  render() {

    return (
      <label>
        <input data-id={this.props.dataID} className="category-checkbox" onChange={this.props.selectCategory} type="checkbox"/>
        {this.props.category.name}
      </label>
    )

  }
}

export default Category