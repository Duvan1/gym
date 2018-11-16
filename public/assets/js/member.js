var startDateValidators = {
			            row: '.plan-start-date',
			            validators: {
			                notEmpty: {
			                    message: 'The start date is required'
			                }
			            }
			        };

	$('#membersform').bootstrapValidator({
		fields: {
			member_code: {
				validators: {
					notEmpty: {
						message: 'El documento del miembro es obligatorio.'
					},
					regexp: {
						regexp: /^[0-9\.]+$/,
						message: 'Por favor solo ingrese números.'
					}
				}
			},
			name: {
				validators: {
					notEmpty: {
						message: 'El nombre del miembro es obligatorio.'
					},
					stringLength: {
                        max: 50,
                        message: 'ingrese menos de 50 caracteres.'
                    }
				}
			},
			address: {
				validators: {
					notEmpty: {
						message: 'El nombre del miembro es obligatorio.'
					},
					stringLength: {
                        max: 200,
                        message: 'ingrese menos de 200 caracteres.'
                    }
				}
			},
			email: {
				validators: {
					notEmpty: {
						message: 'El correo del miembro es obligatorio.'
					},
					emailAddress: {
						message: 'No es un correo valido.'
					},
					stringLength: {
                        max: 50,
                        message: 'ingrese menos de 50 caracteres.'
                    }
				}
			},
			DOB: {
				validators: {
					notEmpty: {
						message: 'La fecha de nacimiento del miembro es obligatorio.'
					},
					date: {
                        format: 'YYYY-MM-DD',
                        message: 'La fecha debe tener el siguiente formato: YYYY-MM-DD'
                    }
				}
			},
			status: {
				validators: {
					notEmpty: {
						message: 'El estado del miembro es obligatorio.'
					}
				}
			},
			health_issues: {
				validators: {
					notEmpty: {
						message: 'Este campo es obligatorio.'
					}
				}
			},
			proof_name: {
				validators: {
					notEmpty: {
						message: 'Este campo es obligatorio.'
					},
					stringLength: {
                        max: 50,
                        message: 'ingrese menos de 50 caracteres.'
                    }
				}
			},
			gender: {
				validators: {
					notEmpty: {
						message: 'Este campo es obligatorio.'
					}
				}
			},
			plan_id: {
				validators: {
					notEmpty: {
						message: 'Este campo es obligatorio.'
					}
				}
			},
			pin_code: {
				validators: {
					notEmpty: {
						message: 'Este campo es obligatorio.'
					},
					regexp: {
						regexp: /^[0-9\.]+$/,
						message: 'Ingrese solo datos numericos.'
					}
				}
			},
			occupation: {
				validators: {
					notEmpty: {
						message: 'Este campo es obligatorio.'
					},
					stringLength: {
                        max: 50,
                        message: 'ingrese menos de 50 caracteres.'
                    }
				}
			},
			aim: {
				validators: {
					notEmpty: {
						message: 'Este campo es obligatorio.'
					},
					stringLength: {
                        max: 50,
                        message: 'ingrese menos de 50 caracteres.'
                    }
				}
			},
			source: {
				validators: {
					notEmpty: {
						message: 'Este campo es obligatorio.'
					},
					stringLength: {
                        max: 50,
                        message: 'ingrese menos de 50 caracteres.'
                    }
				}
			},
			//medidas
			height: {
				validators: {
					regexp: {
						regexp: /^[0-9]+([,][0-9]+)?$/,
						message: 'Formato no valido'
					},
					stringLength: {
                        max: 8,
                        message: 'Ingrse menos de 8 caracteres'
                    }
				}
			},
			weight: {
				validators: {
					regexp: {
						regexp: /^[0-9]+([,][0-9]+)?$/,
						message: 'Formato no valido'
					},
					stringLength: {
                        max: 8,
                        message: 'Ingrse menos de 8 caracteres'
                    }
				}
			},
			shoulder_measurements: {
				validators: {
					regexp: {
						regexp: /^[0-9]+([,][0-9]+)?$/,
						message: 'Formato no valido'
					},
					stringLength: {
                        max: 8,
                        message: 'Ingrse menos de 8 caracteres'
                    }
				}
			},
			chest_measurements: {
				validators: {
					regexp: {
						regexp: /^[0-9]+([,][0-9]+)?$/,
						message: 'Formato no valido'
					},
					stringLength: {
                        max: 8,
                        message: 'Ingrse menos de 8 caracteres'
                    }
				}
			},
			arm_measurements: {
				validators: {
					regexp: {
						regexp: /^[0-9]+([,][0-9]+)?$/,
						message: 'Formato no valido'
					},
					stringLength: {
                        max: 8,
                        message: 'Ingrse menos de 8 caracteres'
                    }
				}
			},
			forearm_measurements: {
				validators: {
					regexp: {
						regexp: /^[0-9]+([,][0-9]+)?$/,
						message: 'Formato no valido'
					},
					stringLength: {
                        max: 8,
                        message: 'Ingrse menos de 8 caracteres'
                    }
				}
			},
			hip_measurements: {
				validators: {
					regexp: {
						regexp: /^[0-9]+([,][0-9]+)?$/,
						message: 'Formato no valido'
					},
					stringLength: {
                        max: 8,
                        message: 'Ingrse menos de 8 caracteres'
                    }
				}
			},
			waist_measurements: {
				validators: {
					regexp: {
						regexp: /^[0-9]+([,][0-9]+)?$/,
						message: 'Formato no valido'
					},
					stringLength: {
                        max: 8,
                        message: 'Ingrse menos de 8 caracteres'
                    }
				}
			},
			thigt_measurements: {
				validators: {
					regexp: {
						regexp: /^[0-9]+([,][0-9]+)?$/,
						message: 'Formato no valido'
					},
					stringLength: {
                        max: 8,
                        message: 'Ingrse menos de 8 caracteres'
                    }
				}
			},
			calf_measurements: {
				validators: {
					regexp: {
						regexp: /^[0-9]+([,][0-9]+)?$/,
						message: 'Formato no valido.'
					},
					stringLength: {
                        max: 8,
                        message: 'Ingrse menos de 8 caracteres'
                    }
				}
			},
			//medidas
			invoice_number: {
				validators: {
					notEmpty: {
						message: 'Este campo es obligatorio.'
					}
				}
			},
			admission_amount: {
				validators: {
					notEmpty: {
						message: 'Este campo es obligatorio.'
					},
					regexp: {
						regexp: /^[0-9\.]+$/,
						message: 'Ingrese solo numeros.'
					}
				}
			},
			subscription_amount: {
				validators: {
					notEmpty: {
						message: 'Este campo es obligatorio.'
					},
					regexp: {
						regexp: /^[0-9\.]+$/,
						message: 'Ingrese solo numeros'
					}
				}
			},
			taxes_amount: {
				validators: {
					notEmpty: {
						message: 'Este campo es obligatorio.'
					},
					regexp: {
						regexp: /^[0-9\.]+$/,
						message: 'Ingrese solo numeros'
					}
				}
			},
			payment_amount: {
				validators: {
					notEmpty: {
						message: 'Este campo es obligatorio.'
					},
					regexp: {
						regexp: /^[0-9\.]+$/,
						message: 'Ingrese solo numeros'
					}
				}
			},
			invoice_id: {
				  validators: {
					  notEmpty: {
						message: 'Este campo es obligatorio.'
					}
				}
			},
			date: {
				  validators: {
					  notEmpty: {
						message: 'Este campo es obligatorio.'
					}
				}
			},
			number: {
				  validators: {
					  notEmpty: {
						message: 'Este campo es obligatorio.'
					}
				}
			},
			contact: {
				validators: {
					notEmpty: {
						message: 'Este campo es obligatorio.'
					},
					regexp: {
						regexp: /^[0-9\.]+$/,
						message: 'Ingrese solo numeros'
					},
					stringLength: {
                        max: 12,
                        message: 'Ingrse menos de 12 caracteres'
                    }
				}
			},
			emergency_contact: {
				validators: {
					notEmpty: {
						message: 'Este campo es obligatorio.'
					},
					regexp: {
						regexp: /^[0-9\.]+$/,
						message: 'Ingrese solo numeros'
					},
					stringLength: {
                        max: 12,
                        message: 'Ingrse menos de 12 caracteres'
                    }
				}
			},
			'plan[0].start_date' : startDateValidators								          
		}
	});
	

