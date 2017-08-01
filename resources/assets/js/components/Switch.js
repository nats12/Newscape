import React, { Component } from 'react';
import ReactDOM from 'react-dom';

class Switch extends Component {
  constructor(props) {
    super(props)

    this.state = {
      checked: this.props.twitterFeedOpen
    }
  }

  toggleCheckboxState = () => {
    let isChecked = !this.state.checked;
    this.setState({checked: isChecked});
    this.props.toggleTwitterFeed(isChecked);

    setTimeout(()=> {
      this.props.toggleMenu();
    }, 475)

  }

  render() {
    return (
      <label className="toggle-switch">
        <input type="checkbox" onChange={() => this.toggleCheckboxState()} checked={this.props.twitterFeedOpen}/>
        <span className="toggle-switch-track round"></span>
      </label>
    )
  }

}

export default Switch;