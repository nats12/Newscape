import React, { Component } from 'react';
import ReactDOM from 'react-dom';


class Language extends Component {
  constructor() {
    super()
    this.state = {
    }

  }

  toggleCheckboxState = (e) => {
    this.setState({checked: e.target.checked});
    this.props.selectLanguage(this, e.target.checked); 
  }

  render() {

    return (
      <div className="large-12 columns">
        <label className="language">
          {this.props.language.name}
          <input 
          className="language-checkbox"
          name={this.props.language.name}
          onChange={(e) => this.toggleCheckboxState(e)}
          type="checkbox"/>
        </label>
      </div>
    )

  }
}

export default Language