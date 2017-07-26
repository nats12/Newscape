import React, { Component } from 'react';
import ReactDOM from 'react-dom';


class Category extends Component {
  constructor() {
    super()
    this.state = {
    }

  }

  toggleCheckboxState = (e) => {
    this.setState({checked: e.target.checked});
    this.props.selectCategory(this, e.target.checked); 
  }

  render() {

    return (
      <div className="large-12 columns">
        <label className="category">
          {this.props.category.name}
          <input 
          className="category-checkbox"
          data-id={this.props.category.id} 
          name={this.props.category.name}
          onChange={(e) => this.toggleCheckboxState(e)}
          type="checkbox"/>
        </label>
      </div>
    )

  }
}

export default Category